<?php

if (isset($_POST["save"])) {
    $email=$_POST["mail"];
    $name = $_POST["user"];
    $pass = $_POST["pass"];

    include_once '../PHP/DB_Connect.php';

    $sql = "UPDATE `user` SET `Name`='". $name."',`Password`='".$pass."' WHERE `Email`='" . $email . "'";

    $result = mysqli_query($con, $sql);
    
    header("Location:../HTML/Profile.php");
}


?>
