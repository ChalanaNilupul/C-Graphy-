
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nilupul Photography</title>
	<link rel="stylesheet" href="../CSS/fadein.css">
	<link rel="stylesheet" href="../CSS/home.css">
	<script src="../js/dropdownsign.js"></script>
	<link rel="stylesheet" href="../CSS/registerpop.css">
	<script src="../js/dropdownregister.js"></script>
	<script src="../js/responsivenav.js"></script>


	<link rel="stylesheet" href="../CSS/nav_&_Footer_php.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

	</style>

</head>

<body>
	<!-------------------------------------------------------------HOME---------------------------------------------------------------------->
	<slider>

		<slide></slide>
		<slide></slide>
		<slide></slide>
		<slide></slide>

	</slider>
	<div class="banner">



		<!-- square effect floating

			<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		
		</div> -->

		<nav>
			<div class="navbar">
				<img src="../Images/LOGO.png" class="logo">



				<div class="navLinks" id="navLinks">
					<div class="">

						<ul>
							<li ><a href="index.php" >Home</a></li>
							<li><a href="Blog.php">Blog</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="galleryNew.php">Gallery</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li></li><i class="fa fa-times" id="navi" onclick="hideMenu()"></i></li>
						</ul>
					</div>
				</div>

				<i class="fa fa-bars" id="navi" onclick="showMenu()"></i>


				<div class="dropdown" style="float:right;">
					<button class="dropbtn">Join</button>
					<div class="dropdown-content">
						<a href="#"><button id="reg" onclick="drop();">Sign Up</button></a>
						<a href="#"><button id="popsign" onclick="popsign();">Sign In</button></a>

					</div>
				</div>

			</div>

		</nav>
		<div class="content">
			<h1>C&nbsp;h&nbsp;a&nbsp;l&nbsp;a&nbsp;n&nbsp;a&nbsp;&nbsp; N&nbsp;i&nbsp;l&nbsp;u&nbsp;p&nbsp;u&nbsp;l</h1>
			<h2>Photography</h2>
			<div>

				<a href="galleryNew.php"><button type="button" class="Gallerybutton"><span></span>G&nbsp;a&nbsp;l&nbsp;l&nbsp;e&nbsp;r&nbsp;y</button></a>

			</div>

		</div>
		<div class="social">
			<a href="https://www.facebook.com/" target="new"><i class="fa fa-facebook" id="fb"></i></a><br>
			<a href="https://www.instagram.com/?hl=en" target="new"><i class="fa fa-instagram" id="insta"></i></a><br>
			<a href="https://twitter.com/i/flow/login" target="new"><i class="fa fa-twitter" id="twitter"></i></a><br>
			<a href="https://www.pinterest.com/business/hub/" target="new"><i class="fa fa-pinterest" id="pinterest"></i></a><br>

		</div>

	</div>

	<!-------------------------------------------------------------END OF HOME---------------------------------------------------------------------->

	<!-------------------------------------------------------------Sign Up---------------------------------------------------------------------->

	<dialog id="modal">

		<button id="close">X</button>
		<form action="../PHP/register.php" method="POST">
			<h1>Register</h1>
			<div class="Rcontent">


				<input type="text" placeholder="Name" name="username" id="username" required><br>
				<input type="email" placeholder="E-mail" name="mail" id="mail" required><br>
				<input type="password" placeholder="Password" name="password" id="password" required><br>
				<input type="password" placeholder="Confirm Password" id="conpassword" required><br>
				<input type="submit" value="Register" class="submit" name="submit">
			</div>
		</form>
	</dialog>
	<!-------------------------------------------------------------Sign In---------------------------------------------------------------------->
	<dialog id="modalsign">

		<button id="closesign">X</button>
		<form action="../PHP/signin.php" method="POST">
			<h1>Sign In</h1>
			<div class="Rcontent">
				<input type="email" id="txtmail" name="txtemail" placeholder="Email" required><br>
				<td><input type="password" id="txtPassword" name="txtPassword" placeholder="Password" required><br>
					<button id="btnSubmit" name="btnSubmit" class="btnSubmit" onclick="valid();">Submit</button><br>
					<h5>Forgot <a href="forgotPass.php">Password?</a></h5>
			</div>
		</form>
	</dialog>
	<!-------------------------------------------------------------END OF Sign In---------------------------------------------------------------------->



	<div class="services" id="service">

		<div class="services-inner">
			<h1>SERVICES</h1>


		</div>
		<div class="boxx">
			<div class="box1">

				<img src="../Images/camera_52px.png" class="logos">
				<h1>Photography</h1>
				<p> It's crucial to make your memories more beautiful and colorful and I'm here to make your dream come
					true.you get to keep all photos with complete usage rights for the rest of your life. All
					photographs will be professionally edited, and my graphic design team will put them to the greatest
					possible use for your needs.</p>

			</div>
			<div class="box2">
				<img src="../Images/documentary_48px.png" class="logos">
				<h1>Videography</h1>
				<p>A video is a memory that can help you remember how something felt. I'm here to brighten up that
					memory for you and make your best recollection even more wonderful.</p>

			</div>
			<div class="box3">
				<img src="../Images/magic_crystal_ball_60px.png" class="logos">
				<h1>Photo Retouching</h1>
				<p>I'll make your portrait shots look polished and professional.I will enhance body forms and skin
					texture, as well as erase any undesired flaws, resulting in realistically edited models.</p>

			</div>
		</div>
	</div>





	<section class="o">
		<div class="o-inner" style="padding: 0 30px 0 30px;">
			<h1 style="text-align: center;font-size:40px">About</h1>
			<p style="text-align: justify;">I'm Chalana.



				I received my BFA in Photo Media from The University of Kansas in 2014. In 2016 I made the move from KC to Austin. 



				When I'm not shooting, I'm more than likely hosting friends on our patio, taking Sunny for a hike, planning our next road trip, vintage shopping, or drinking a tequila soda.</p>
		</div>

	</section>
	<div>
		<h6>Gallery Categories</h6>
	</div>
	<div class="category">

		<div class="category-content">
			<div class="clip clip1">
				<div class="tag">
					<h2>Nature</h2>
				</div>
			</div>
			<div class="clip clip2">
				<div class="tag">
					<h2>Wildlife</h2>
				</div>
			</div>
			<div class="clip clip3">
				<div class="tag">
					<h2>Landscape</h2>
				</div>
			</div>
		</div>

	</div>
	</div>




	<!-------------------------------------------------------------SCROLL TO TOP---------------------------------------------------------------------->
	<div class="scrollTop" onClick="scrollToTop();"></div>
	<script type="text/javascript">
		window.addEventListener('scroll', function() {
			var scroll = document.querySelector('.scrollTop');
			scroll.classList.toggle("active", window.scrollY > 500)
		})

		function scrollToTop() {
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
			})
		}
	</script>
	<!-------------------------------------------------------------SCROLL TO TOP END---------------------------------------------------------------------->

	<!-------------------------------------------------------------FOOTER---------------------------------------------------------------------->

	<footer class="footer" style="margin-top: 100px;height:300px">
        <div class="contain">
            <div class="row">

                <!----- <div class="footer-col">

                    <ul>
                        <li><img src="../Images/LOGO.png" class="logo"></li>


                    </ul>
                   	<h4>Hello</h4>

                </div>-->

                <!---- <div class="footer-col">
                    <h4>Hello</h4>
                    <ul>
                        <li><a href="#">ASAS</a></li>
                        <li><a href="#">DADAD</a></li>
                        <li><a href="#">adsdDad</a></li>

                    </ul>

                </div>   ----->
                <div class="footer-col">

                    <div class="social-foot">
                        <a href="https://www.facebook.com/" target="new"><i class="fa fa-facebook" id="fb"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="new"><i class="fa fa-instagram" id="insta"></i></a>
                        <a href="https://twitter.com/i/flow/login" target="new"><i class="fa fa-twitter" id="twitter"></i></a>
                        <a href="https://www.pinterest.com/business/hub/" target="new"><i class="fa fa-pinterest"  id="pinterest"></i></a>


                    </div>

                </div>
                <div class="footer-col">
                    <div>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="galleryNew.php">Gallery</a></li>
                            <li><a href="Login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>

                        </ul>
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


	<!-------------------------------------------------------------END OF FOOTER---------------------------------------------------------------------->
</body>

</html>