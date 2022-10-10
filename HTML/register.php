<?php session_start();

if (!isset($_SESSION["txtemail"])) {
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
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="stylesheet" type="text/css" href="../CSS/nav & Footer.css" />
    <script src="../js/formjsvalidate.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>


    <!-------------------------------------------------------------HEADER---------------------------------------------------------------------->
    <?php echo $bar; ?>
    <!-------------------------------------------------------------END OF HEADER---------------------------------------------------------------------->

    <div class="register">
        <form action="../PHP/register.php" method="POST">
            <div class="Rcontent">
                <h1>Register</h1>
                
                 
               
                <input type="text" placeholder="Name" name="username" id="username" required><br>
                <input type="email" placeholder="E-mail" name="mail" id="mail" required><br>
                <input type="password" placeholder="Password" name="password" id="password" required><br>
                <input type="password" placeholder="Confirm Password" id="confirm-password" required><br>
                <input type="submit" value="Register" class="submit" name="submit" onclick="validateAll()">
                <h5>Already a user? <a href="Login.php" style="color:white ;">Sign In</a></h5> 
            </div>
        </form>
    </div>
</body>

</html>










<!-------------------------------------------------------------FOOTER---------------------------------------------------------------------->

<?php include_once 'footer.php' ?>


<!-------------------------------------------------------------END OF FOOTER---------------------------------------------------------------------->
</body>


</html>