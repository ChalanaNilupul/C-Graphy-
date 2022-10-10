<?php include_once '../PHP/DB_Connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" href="../CSS/fadein.css">
    <link rel="stylesheet" href="../CSS/imageComment.css">
</head>

<body>
  
    <div class="content-back">
        <div class="content">


            <?php

            $sql = "SELECT * FROM `images` WHERE `ImgID`='" . $_GET["id"] . "'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo " 
                <div class='backbtn'><a href='../HTML/galleryNew.php'>Back</a></div>
                <div class='back'>
                <div class='image'><img src='" . $row["Image"] . "' alt='' width='400px' ></div>
                <div class='inner'>
                    <h1>" . $row["Title"] . "</h1>
                    <p>" . $row["Description"] . "</p>
                   
                </div>
            </div>
                
                
                ";



                    $sql = "SELECT * FROM `imgcomment` WHERE `ImgID`='" . $_GET["id"] . "'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $sql1 = "SELECT * FROM `user` WHERE `Email`='" . $row['Mail'] . "'";
                            $result1 = mysqli_query($con, $sql1);

                            if (mysqli_num_rows($result1) > 0) {
                                while ($row1 = mysqli_fetch_assoc($result1)) {

                                    echo "
                        <div class='sec' name='commentSec'>
                        <div class='i_U_out'>
                       <div class='uico'><div> <img src='" . $row1['PPic'] . "' alt='' width='20px' height='20px'></div></div>
                       <div class='uname'> <h4>" . $row1["Name"] . "</h4></div></div>
                        <p>" . $row["Comment"] . "</p>
                        
                        </div>
                                        


                                ";
                                }
                            }
                        }
                    }
                }
            }
            ?>


            <form action="../PHP/addCommentImages.php?id=<?php echo $_GET['id'] ?>" method="POST">

                <input type='text' name='comment' id='comment' placeholder="Add a comment">

                <button name='send'>Send</button>
            </form>


        </div>
    </div>

</body>

</html>