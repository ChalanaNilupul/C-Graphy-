<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:Login.php");
	
}
?>
<?php

    include_once '../PHP/DB_Connect.php';

    $sql = "UPDATE `user` SET `PPic`='../Uploads/PPic/default.png' WHERE `Email`='".$_SESSION["txtemail"]."'";

    $result = mysqli_query($con, $sql);
    
    header("Location:../HTML/Profile.php");



?>