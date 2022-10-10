<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:Login.php");
	
}
?>
<?php

if (isset($_POST["pic"])) {
    $picP = "../Uploads/PPic/" . basename($_FILES["picp"]["name"]);
    move_uploaded_file($_FILES["picp"]["tmp_name"],$picP);

    include_once '../PHP/DB_Connect.php';

    $sql = "UPDATE `user` SET `PPic`='". $picP."' WHERE `Email`='".$_SESSION["txtemail"]."'";

    $result = mysqli_query($con, $sql);
    
    header("Location:../HTML/Profile.php");
}


?>