<!----------------------------------------------------------php----------------------------------------------->

<?php

$uerror = "";
$perror = "";
$success = "";
if (isset($_POST["btnSubmit"])) {
    $email = $_POST['txtemail'];
    $pass = $_POST["txtPassword"];
    $valid = false;

    $con = mysqli_connect("localhost", "root", "", "cngraphy");

    if (!$con) {
        die("Connect to a database");
    }
    $sql = "SELECT Email FROM `admin`";
    //$sql = "SELECT * FROM `admin` WHERE `Email`='" . $email . "' and `Password` ='" . $pass . "'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if($result=="chalana@gmail.com")
        {$valid = true;}
    }
} else {
    $valid = false;
}
if ($valid) {
    $_SESSION["txtemail"] = $email;
    header("Location:../HTML/home.html");
} else {
    echo "Please enter correct username and password";
}
?>

<!----------------------------------------------------------END php----------------------------------------------->

<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style-Sign.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/nav & Footer.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script type="text/javascript">
        /*--------------------------------------alert function-----------------------------------------*/
        function alert() {

            document.getElementById("alert1").innerHTML = "Fill";

        }
    </script>



</head>

<body>
    <!-------------------------------------------------------------HEADER---------------------------------------------------------------------->
    <div class="navbar">
        <img src="../Images/LOGOC2.png" class="logo">




        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact</a></li>


        </ul>

    </div>
    <!-------------------------------------------------------------END OF HEADER---------------------------------------------------------------------->


    <!-------------------------------------------------------------FORM---------------------------------------------------------------------->
    <div class="back">
        <div class="sign">
            <h1>LOGIN</h1>
            <form method="POST">
                <table>
                    <tr>
                        <td><input type="email" id="txtUser" name="txtemail" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td>
                        <p class="alert" id="alert1"><?php echo $uerror ?></p><p class="alert" id="alert1"><?php echo $success ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" id="txtPassword" name="txtPassword" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="alert" id="alert1"><?php echo $perror ?></p><p class="alert" id="alert1"><?php echo $success ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="align-items:right;"><button id="btnSubmit" name="btnSubmit">Submit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Forgot <a href="#">Password?</a></h5>
                        </td>
                    </tr>
                </table>
            </form>


        </div>
    </div>
    <!-------------------------------------------------------------END OF FORM---------------------------------------------------------------------->

    <!-------------------------------------------------------------FOOTER---------------------------------------------------------------------->
    <footer class="footer">
        <div class="contain">
            <div class="row">

                <div class="footer-col">

                    <ul>
                        <li><img src="../Images/LOGOC2.png" class="logo"></li>


                    </ul>
                    <!----	<h4>Hello</h4>-->

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



    <!-------------------------------------------------------------END OF FOOTER---------------------------------------------------------------------->
</body>

</html>