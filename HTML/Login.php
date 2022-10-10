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
<html>

<head>
    <title>Log In</title>
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="stylesheet" type="text/css" href="../CSS/nav & Footer.css" />
    
    <script src="#"></script>
    
</head>

<body>
    <!-------------------------------------------------------------HEADER---------------------------------------------------------------------->
    <?php echo $bar; ?>
    <!-------------------------------------------------------------END OF HEADER---------------------------------------------------------------------->


    <!-------------------------------------------------------------FORM---------------------------------------------------------------------->
    <div class="back">
        <div class="sign">
            <h1>LOGIN</h1>
            <?php      
          if (isset($_GET['error'])) {  
            echo "<div class='error'>
            <p>".$_GET['error']."</p>
                </div>";
          }
            ?>
            
            <form method="POST" action="../PHP/signin.php">
                <table>
                    <tr>
                        <td><input type="email" id="txtmail" name="txtemail" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="alert" id="alert1"> </p>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" id="txtPassword" name="txtPassword" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="alert" id="alert2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="align-items:right;"><button  id="btnSubmit" name="btnSubmit" onclick="valid();" >Submit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Forgot <a href="forgotPass.php">Password?</a></h5> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>I'm New Here <a href="register.php">Register</a></h5> 
                        </td>
                    </tr>
                </table>
            </form>


        </div>
    </div>
    <!-------------------------------------------------------------END OF FORM---------------------------------------------------------------------->

    <!-------------------------------------------------------------FOOTER---------------------------------------------------------------------->
    
    <?php  include_once 'footer.php'  ?>

    <!-------------------------------------------------------------END OF FOOTER---------------------------------------------------------------------->
</body>

</html>