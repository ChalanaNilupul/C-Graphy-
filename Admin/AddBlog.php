<?php include_once '../PHP/DB_Connect.php'  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
    <link rel="stylesheet" href="../CSS/addblog.css">
</head>

<body>
    <div class="back">

        <form action="AddBlog.php" method="POST" enctype="multipart/form-data">
            <div class="addblog">
                <input type="text" name="Title" id="Title" placeholder="Title" required><br>
                <textarea name="Article" id="" cols="30" rows="10" required></textarea>
                <input type="file" name="img" id="img" required><br>

                <?php

                if (isset($_POST["Add"])) {

                    $title = $_POST["Title"];
                    $img = "../Uploads/Article/" . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $img);
                    $article = $_POST["Article"];




                    $sql = "INSERT INTO `blogs`(`Title`, `Image`, `Article`) VALUES ('" . $title . "','" . $img . "','" . $article . "')";

                    if (mysqli_query($con, $sql)) {
                        echo "Successfull";
                    } else {
                        echo "Error";
                    }
                }

                ?>


                <button name="Add">ADD</button>

            </div>

        </form>

    </div>
</body>

</html>