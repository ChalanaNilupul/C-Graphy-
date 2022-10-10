<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:../HTML/Login.php");
	
}

else
{
    include_once 'DB_Connect.php';


    $sql = "SELECT * FROM `bloglikes` WHERE `blogID`='" . $_GET["id"]. "' AND `Email`='".$_SESSION["txtemail"]."'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
       
        header("Location:../HTML/Blog.php");
    
    }

    else{

    $sql = "INSERT INTO `bloglikes`  (`blogID`,`Email`) VALUES ('".$_GET["id"]."','".$_SESSION["txtemail"]."')";

    $result = mysqli_query($con, $sql);
    
    header("Location:../HTML/Blog.php");

    }
}

?>