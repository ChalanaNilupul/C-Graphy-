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
    <title>Forgot Password</title>
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
        <form action="../PHP/forgotpass.php" method="POST">
            <div class="Rcontent">
                <h1>Enter Your Email</h1>
                
                 
               
                <input type="text"  name="Email" id="Email" required placeholder="Email"><br>
               
                <input type="submit" value="Submit" class="submit" name="submit" >
                <h5 style="text-align:left;padding-left:50px"><a href="Login.php" style="color:white ;">Back To Sign In</a></h5> 
            </div>
        </form>
    </div>
</body>

</html>