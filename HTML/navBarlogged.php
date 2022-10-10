<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="../CSS/nav_&_Footer_php.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="../js/responsivenav.js"></script>
</head>

<body>
    <div class="navbar">
        <img src="../Images/LOGO.png" class="logo">




    	<div class="navLinks" id="navLinks">
			<div class="">

				<ul>
					<li><a href="../User/UserHome.php">Home</a></li>
					<li><a href="Blog.php">Blog</a></li>
					<li><a href="../User/UserHome.php">Services</a></li>
					<li><a href="galleryNew.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
                    <li><a href="../User/cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					<i class="fa fa-times" id="navi" onclick="hideMenu()"></i>
				</ul>
			</div>
		</div>

		<i class="fa fa-bars" id="navi" onclick="showMenu()"></i>

        <div class="dropdown" style="float:right;">
            <button class="dropbtn">Hello&nbsp; <?php

                                                $con = mysqli_connect("localhost", "root", "", "cngraphy");

                                                if (!$con) {
                                                    die("Connect to a database");
                                                }

                                                $sql = "SELECT `Name` FROM `user` WHERE `Email`='" . $_SESSION['txtemail'] . "'";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    $row = mysqli_fetch_assoc($result);

                                                    echo "" . $row["Name"] . "";
                                                } ?></button>
            <div class="dropdown-content">
                <a href="Profile.php"><button><i class="fa fa-user" style="font-size: 25px;padding-right:10px;color:white;" id="proid"></i>&nbsp;&nbsp;Profile</button></a>
                <a href="../PHP/signOut.php"><button><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 25px;padding-left:10px;color:white" d="proid"></i>&nbsp;&nbsp;Sign Out</button></a>

            </div>
        </div>




    </div>
</body>

</html>