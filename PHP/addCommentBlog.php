<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:../HTML/Login.php");
	
}

else{

if (isset($_POST["send"])) {
    $comment=$_POST["comment"];

    include_once '../PHP/DB_Connect.php';

    $sql = "INSERT INTO `blogcomment` (`blogID`,`Comment`,`Mail`) VALUES ('".$_GET["id"]."','".$comment."','".$_SESSION["txtemail"]."')";

    $result = mysqli_query($con, $sql);
    $id=$_GET['id'];
   
    header("Location:../User/blogfull.php?id= {$id} ");
}
   
}
?>
