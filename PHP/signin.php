<!-----------------------------------------Sign In------------------------------------------->
<?php session_start() ?>
<?php

if (isset($_POST["btnSubmit"])) {

    $email = $_POST["txtemail"];
    $pass = $_POST["txtPassword"];
    $valid = false;



    $con = mysqli_connect("localhost", "root", "", "cngraphy");

    if (!$con) {
        die("Connect to a database");
    }
    $sql = "SELECT * FROM `user` WHERE `Email`='" . $email . "' and `Password` ='" . $pass . "'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $valid = true;
        while ($row = mysqli_fetch_assoc($result))
        {

                if($row['Post']=='admin')
                {
                    header("Location:../Admin/AdminPannel.php");
                }
                else{
                    header("Location:../User/UserHome.php");
                }



        }
    }
} else {
    $valid = false;
}
if ($valid) {
    $_SESSION["txtemail"] = $email;
    
} else {
    /*echo "<script>alert('Please enter correct username and password')</script>";*/
    header("Location:../HTML/Login.php?error=Username Or Password Invalid");
}
?>