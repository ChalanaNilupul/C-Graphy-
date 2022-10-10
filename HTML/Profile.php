<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:Login.php");
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
    <title>Profile</title>
    <link rel="stylesheet" href="../CSS/profile.css">
</head>

<body>
<?php echo $bar; ?>


    <div class="title">
        <h1 class="profile_head">User Profile</h1>
    </div>
    <div class="content">
        
        <?php

        include_once '../PHP/DB_Connect.php';

        $sql = "SELECT * FROM `user` WHERE `Email`='".$_SESSION['txtemail']."'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    
        ?>
        <div class="pro_pic">
            <div><img src="<?php echo "".$row['PPic']."" ?>" alt="" width="300px" height="300px"></div>
        </div>
        <div class="info">
            <div class="inner">
                <table>
                    <tr>
                        <td></td>
                        
                        <td ></td>
                    </tr>
                    <tr>
                        <td style="padding-right:100px ;">
                            <h3>E-Mail</h3>
                        </td>
                        <td>
                            <h3 name="mail"><?php echo "".$row['Email']."" ?></h3>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="padding-right:100px ;">
                            <h3>Username</h3>
                        </td>
                        <td>
                            <h3 name="user"><?php echo "".$row['Name']."" ?></h3>
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="padding-right:100px ;">
                            <h3>Password</h3>
                        </td>
                        <td>
                            <h3 name="pass"><?php echo "".$row['Password']."" ?></h3>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                           
                        </td>
                        <td style="text-align: right;">
                           <a href="EditProfile .php"><img src="../Images/pencil.png" alt="" width="20px" class="pencil"></a> 
   
                        </td>
                        
                        
                    </tr>
                  <?php  if($row['Post']=='admin'){
                   echo "<a href='../Admin/AdminPannel.php'><button class='webbtn'>Customise Website</button></a>";
                }
                    ?>
                </table>
            </div>
        </div>
        <?php      }
        }  ?>
    </div>
</body>

</html>