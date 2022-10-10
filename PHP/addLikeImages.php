<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:../HTML/Login.php");
	
}

else
{
    include_once 'DB_Connect.php';


    $sql = "SELECT * FROM `imglike` WHERE `ImgID`='" . $_GET["id"]. "' AND `Email`='".$_SESSION["txtemail"]."'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        header("Location:../HTML/galleryNew.php");
    
    }

    else{

    $sql = "INSERT INTO `imglike`  (`ImgID`,`Email`) VALUES ('".$_GET["id"]."','".$_SESSION["txtemail"]."')";

    $result = mysqli_query($con, $sql);
    
    header("Location:../HTML/galleryNew.php");

    }
}

?>