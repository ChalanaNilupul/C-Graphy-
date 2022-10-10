<!DOCTYPE html>
<html>

<head>
	<title>Sign In</title>

	<link rel="stylesheet" type="text/css" href="../CSS/nav_&_Footer_php.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<script src="../js/responsivenav.js"></script>


</head>

<body>
	<!-------------------------------------------------------------HEADER---------------------------------------------------------------------->
	<div class="navbar">
		<img src="../Images/LOGO.png" class="logo" height="65px">



		<div class="navLinks" id="navLinks">
			<div class="">

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="Blog.php">Blog</a></li>
					<li><a href="../HTML/index.php">Services</a></li>
					<li><a href="galleryNew.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
					<i class="fa fa-times" id="navi" onclick="hideMenu()"></i>
				</ul>
			</div>
		</div>

		<i class="fa fa-bars" id="navi" onclick="showMenu()"></i>

		<div class="dropdown" style="float:right;">
			<button class="dropbtn">Join</button>
			<div class="dropdown-content">
				<a href="register.php"><button id="reg">Sign Up</button></a>
				<a href="Login.php"><button id="popsign">Sign In</button></a>

			</div>
		</div>


	</div>
</body>

</html>