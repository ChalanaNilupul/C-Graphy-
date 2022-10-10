<?php session_start();

if (!isset($_SESSION["txtemail"])) {
    header("location:Loginn.php");
    $bar=include_once 'navBar.php';
}
else
{
	$bar=include_once 'navBarlogged.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../CSS/profile.css">
    <script src="../js/popup.js"></script>
    <script src="../js/addProPic.js"></script>
    <link rel="stylesheet" href="../CSS/editPicpopUp.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php echo $bar; ?>

    <div class="title">
        <h1 class="profile_head">User Profile</h1>
    </div>
    <div class="content">

        <?php

        include_once '../PHP/DB_Connect.php';

        $sql = "SELECT * FROM `user` WHERE `Email`='" . $_SESSION["txtemail"] . "'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <div class="pro_pic">
                    <div class="ico"><img src="<?php echo "" . $row['PPic'] . "" ?>" alt="" width="300px" height="300px"><button class="icon" onclick="pop();"><i class="fa fa-camera" aria-hidden="true" style="color: white;font-size: 20px;"></i></button></div>
                    
                </div>
                <div class="info">
                    
                    <div class="inner">
                        <form action="../PHP/EditProfileDB.php" method="POST">
                            <table>
                                <tr>
                                    <td></td>

                                    <td style="text-align:right;padding-bottom: 20px;"><a href="../PHP/DeletePPic.php">Delete</a></td>
                                </tr>
                                <tr>
                                    <td style="padding-right:100px ;">
                                        <h3>Mail</h3>
                                    </td>
                                    <td>
                                        <input type="email" name="mail" id="mail" value="<?php echo "" . $row['Email'] . "" ?>" readonly></input>
                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding-right:100px ;">
                                        <h3>Username</h3>
                                    </td>
                                    <td>
                                        <input type="text" name="user" id="user" value="<?php echo "" . $row['Name'] . "" ?>">
                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding-right:100px ;">
                                        <h3>Password</h3>
                                    </td>
                                    <td>
                                        <input type="password" name="pass" id="pass" value="<?php echo "" . $row['Password'] . "" ?>">
                                    </td>

                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td style="text-align: right;">
                                        <a href=""><button name="save" class="save">Save</button> </a>
                                    </td>

                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
        <?php      }
        }  ?>
    </div>


    <!-----------------------------------------Pop Up Edit Image--------------------------------------------->
    <dialog id="modal">

        <button id="close">X</button>
        <form action="../PHP/EditPPic.php" method="POST" enctype="multipart/form-data">
            <h1>Edit Profile Picture</h1>
            <div class="Rcontent">
                <input type="file" name="picp" id="in">
                <button name="pic" id="btn">Save</button>
            </div>
        </form>
    </dialog>


</body>

</html>