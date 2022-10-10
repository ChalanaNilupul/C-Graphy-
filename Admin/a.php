<?php session_start();

if (!isset($_SESSION["txtemail"])) {
    //header("location:Loginn.php");

}
?>
<?php include_once '../PHP/DB_Connect.php'  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../CSS/AdminPannel.css">

</head>

<body>

    <div class="mainbox">

        <div class="menu">
            <ul>
                <li><a href="../User/UserHome.php"> <button id="click"> Visit Website </button></a></li>
                <li> <button id="click" onclick="box1()"> Add Blog </button></li>
                <li><button id="click" onclick="box2()"> Add image </button></li>
                <li> <button id="click" onclick="box3()"> Purchase History </button></li>
                <li><button id="click" onclick="box4()"> Analize </button></li>

            </ul>

        </div>
        <div class="boxout">
            <div class="main">

                <div class="box1" id="box1">

                    <div class="back">

                        <form action="Customize.php" method="POST" enctype="multipart/form-data">
                            <div class="addblog">
                                <h1>Add Blog</h1>
                                <input type="text" name="Title" id="Title" placeholder="Title" required><br>
                                <textarea name="Article" id="" cols="30" rows="10" placeholder="Content" required></textarea><br>
                                <input type="file" name="img" id="img" required><br>

                                <?php

                                if (isset($_POST["Add"])) {

                                    $title = $_POST["Title"];
                                    $img = "../Uploads/Article/" . basename($_FILES["img"]["name"]);
                                    move_uploaded_file($_FILES["img"]["tmp_name"], $img);
                                    $article = $_POST["Article"];




                                    $sql = "INSERT INTO `blogs`(`Title`, `Image`, `Article`) VALUES ('" . $title . "','" . $img . "','" . $article . "')";

                                    if (mysqli_query($con, $sql)) {
                                        header("Location:../Admin/Customize.php");
                                    } else {
                                        echo "Error";
                                    }
                                }

                                ?>


                                <button name="Add">ADD</button>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="box3" id="box3">
                    <div class="content">
                        <div class="add">
                            <form action="Customize.php" method="POST" enctype="multipart/form-data">
                                <h1>Add Image</h1>
                                <input type="text" name="title" id="title" placeholder="Title" required><br>
                                <input type="text" name="price" id="price" placeholder="Price" required><br>
                                <input type="file" name="img" id="img" required><br>
                                <input type="text" name="category" id="category" placeholder="Category" required><br>
                                <textarea name="description" id="description" placeholder="Description" cols="30" rows="10" required></textarea><br>

                                <?php

                                if (isset($_POST["add"])) {

                                    $title = $_POST["title"];
                                    $img = "../Uploads/" . basename($_FILES["img"]["name"]);
                                    move_uploaded_file($_FILES["img"]["tmp_name"], $img);
                                    $category = $_POST["category"];
                                    $description = $_POST["description"];
                                    $price = $_POST['price'];

                                    $con = mysqli_connect("localhost", "root", "", "cngraphy");

                                    if (!$con) {
                                        die("Connect to a database");
                                    }

                                    $sql = "INSERT INTO `images`(`Title`, `Image`, `Category`, `Description`,`Price`) VALUES ('" . $title . "','" . $img . "','" . $category . "','" . $description . "','" . $price . "')";

                                    if (mysqli_query($con, $sql)) {
                                        header("Location:../Admin/Customize.php");
                                    } else {
                                        echo "Error";
                                    }
                                }

                                ?>

                                <button name="add" id="add">Add</button>
                            </form>
                        </div>
                    </div>

                </div>


                <div class="box3" id="box4">


                    <div class="table">
                        <ul style="font-size: 20px;font-weight: bold;">
                            <li style="padding-right: 0px;">Purchase ID</li>
                            <li style="padding-right: 0px;">Email</li>
                            <li style="padding-right: 0px;">Image ID</li>
                            <li style="padding-right: 0px;">Price ($)</li>
                            <li style="padding-right: 0px;"> Date And Time</li>
                        </ul>

                        <?php
                        $sql = "SELECT * FROM `purchase_details`";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                /*-------------CAL TOTAL-------------*/
                                $price = $row['Price'];
                                $seperate = $price(explode(" ", $price));
                                $num = $seperate[0];
                                $value = (int)$num;
                                $tot += $value;
                                /*-------------CAL TOTAL-------------*/
                                echo "  
                                
                                <ul>
                                <li>" . $row['PurchaseID'] . "</li>
                                <li>" . $row['Email'] . "</li>
                                <li>" . $row['ImgID'] . "</li>
                                <li>" . $row['Price'] . "&nbsp;$</li>
                                <li> " . $row['Date&Time'] . "</li>
                            </ul>
                                
                                
                                
                                ";
                            }
                        }



                        ?>

                    </div>

                </div>




                <div class="box3" id="box5">

                    <div class="analyze">
                        <div class="tot">
                            <h2>Total</h2>
                            <h4>$&nbsp;<?php echo $tot ?></h4>
                        </div>
                    </div>
                </div>



            </div>


        </div>

    </div>







    <script>
        function box1() {
            var box1 = document.getElementById("box1");
            var box2 = document.getElementById("box3");
            var box3 = document.getElementById("box4");
            var box4 = document.getElementById("box5");
            box1.style.display = "flex";
            box2.style.display = "none";
            box3.style.display = "none";
            box4.style.display = "none";

        }

        function box2() {
            var box1 = document.getElementById("box1");
            var box2 = document.getElementById("box3");
            var box3 = document.getElementById("box4");
            var box4 = document.getElementById("box5");

            box1.style.display = "none";
            box2.style.display = "flex";
            box3.style.display = "none";
            box4.style.display = "none";

        }

        function box3() {
            var box1 = document.getElementById("box1");
            var box2 = document.getElementById("box3");
            var box3 = document.getElementById("box4");
            var box4 = document.getElementById("box5");
            box1.style.display = "none";
            box2.style.display = "none";
            box3.style.display = "flex";
            box4.style.display = "none";

        }

        function box4() {
            var box1 = document.getElementById("box1");
            var box2 = document.getElementById("box3");
            var box3 = document.getElementById("box4");
            var box4 = document.getElementById("box5");
            box1.style.display = "none";
            box2.style.display = "none";
            box3.style.display = "none";
            box4.style.display = "flex";

        }
    </script>


</body>

</html>