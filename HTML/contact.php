<?php session_start();

if (!isset($_SESSION["txtemail"])) {
	$bar=include_once 'navBar.php';
}
else
{
	$bar=include_once 'navBarlogged.php';
}
?>
<!doctype html>
<html>

<head>
	<title>Contact</title>
	<link rel="stylesheet" href="../CSS/fadein.css">
	<link rel="stylesheet" href="../CSS/Contact.css">
	<link rel="stylesheet" href="../CSS/nav & Footer.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
	 
<?php echo $bar; ?>

	<!----------------------------------------------------------details-------------------------------------------------------------------------------->
	<div class="details">
		<div class="box"><i class="fa-solid fa-phone"></i>
			<h2>076-351XXXX</h2>
		</div>
		<div class="box"><i class="fa-solid fa-envelope-open"></i>
			<h2>cgraphy@gmail.com</h2>
		</div>
		<div class="box"><i class="fa-solid fa-map-location"></i>
			<h3> 490 De Mel Mawatha, Colombo 00300</h3>
		</div>


	</div>



	<!----------------------------------------------------------mail-------------------------------------------------------------------------------->

	<div class="mail">
		<div class="mail_inner">
			<h1>Drop A Mail</h1>
			<form action="../PHP/contact-us-email.php" method="POST">

				<h3>Your Name</h3><br>
				<input type="text" name="name" placeholder="Your name.." required><br>
				<h3>Email</h3><br>
				<input type="email" name="email" placeholder="Your email.." required><br>

				<h3>Message</h3><br>
				<textarea name="message" placeholder="Write something.." style="height:200px" required></textarea><br>
				<input type="submit" value="Submit" name="btnSubmit">
			</form>
		</div>

	</div>



	<!----------------------------------------------------------Google Map-------------------------------------------------------------------------------->
	<div class="map">
		<iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8151043068374!2d79.84849041526091!3d6.912698020432974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942414af9a1%3A0x782f4cfc829b5483!2sBank%20of%20Ceylon%20(BOC)%20Merchant%20Tower!5e0!3m2!1sen!2slk!4v1651957644989!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>




	<?php include_once 'footer.php' ?>




</body>

</html>