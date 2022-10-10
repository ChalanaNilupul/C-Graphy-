<!doctype html>
<html>

<head>
    <title>Add Image</title>
    <link rel="stylesheet" href="../CSS/addIMG.CSS">
    <link rel="stylesheet" href="../CSS/nav & Footer.css">
   

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="navbar">
        <img src="../Images/LOGOC2.png" class="logo">

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="images.php">Gallery</a></li>
            <li><a href="#">Contact</a></li>


        </ul>

    </div>

    <!--------------------------------------------------------------Content-------------------------------------------------------->
    <div class="content">
        <div class="add">
            <form action="addimg.php" method="POST" enctype="multipart/form-data">
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
                    $price=$_POST['price'];

                    $con = mysqli_connect("localhost", "root", "", "cngraphy");

                    if (!$con) {
                        die("Connect to a database");
                    }

                    $sql = "INSERT INTO `images`(`Title`, `Image`, `Category`, `Description`,`Price`) VALUES ('".$title."','".$img."','".$category."','".$description."','".$price."')";

                    if(mysqli_query($con, $sql))
                    {
                        echo "Successfull";
                    }
                    else
                    {
                        echo "Error";
                    }
                }

                ?>

                <button name="add" id="add">Add</button>
            </form>
        </div>
    </div>










    <footer class="footer">
        <div class="contain">
            <div class="row">

                <div class="footer-col">

                    <ul>
                        <li><img src="../Images/LOGOC2.png" class="logo"></li>


                    </ul>


                </div>

                <div class="footer-col">
                    <h4>Hello</h4>
                    <ul>
                        <li><a href="#">ASAS</a></li>
                        <li><a href="#">DADAD</a></li>
                        <li><a href="#">adsdDad</a></li>

                    </ul>

                </div>

                <div class="footer-col">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="SignIn.html">Login</a></li>
                        <li><a href="#">Register</a></li>

                    </ul>

                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/" target="new"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login" target="new"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="new"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/business/hub/" target="new"><i class="fab fa-pinterest"></i></a>

                    </div>

                </div>
            </div>

        </div>
        <div class="copyright">
            <h5>©&nbsp;C&nbsp;h&nbsp;a&nbsp;l&nbsp;a&nbsp;n&nbsp;a&nbsp;&nbsp;
                N&nbsp;i&nbsp;l&nbsp;u&nbsp;p&nbsp;u&nbsp;l &nbsp;&nbsp;|&nbsp;&nbsp; A&nbsp;l&nbsp;l&nbsp;&nbsp;
                R&nbsp;i&nbsp;g&nbsp;h&nbsp;t&nbsp;s&nbsp;&nbsp; R&nbsp;e&nbsp;s&nbsp;e&nbsp;r&nbsp;v&nbsp;e&nbsp;d</h5>
        </div>
    </footer>




</body>

</html>