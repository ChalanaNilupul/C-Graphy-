<?php include_once '../PHP/DB_Connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" href="../CSS/fadein.css">
    <link rel="stylesheet" href="../CSS/blogfull.css">
</head>

<body>
    <div class="blogs">
        <div class="bloginner">



            <?php



            $sql = "SELECT * FROM `blogs` WHERE `blogID`='" . $_GET["id"] . "' ";
            $result = mysqli_query($con, $sql);
            $id = $_GET["id"];
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "
                    <div class='back'><a href='../HTML/Blog.php'>Back</a></div>
                <div class='out'>
                <h1>" . $row["Title"] . "</h1>
                <div class='blog'>

                    <div class='pic'><img src='" . $row["Image"] . "' alt=''></div>
                    
                    <div class='article'>
                        <p>" . $row["Article"] . " </p>

                    </div>

                </div>
                <div class='date'>
                    <p>" . $row["Date"] . "</p>
                </div>
                
                </div>
                    


                ";



                    $sql = "SELECT * FROM `blogcomment` WHERE `blogID`='" . $_GET["id"] . "'";
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
                   <div class='uico'><div> <img src='".$row1['PPic']."' alt='' width='20px' height='20px'></div></div>
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


            <form action="../PHP/addCommentBlog.php?id= <?php echo $_GET['id'] ?> " method="POST">

                <input type='text' name='comment' id='comment' placeholder="Add a comment">

                <button name='send'>Send</button>
            </form>

            <?php    ?>

        </div>
    </div>

</body>

</html>