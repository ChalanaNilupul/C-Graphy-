<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:../HTML/Login.php");
	
}   ?>


<?php

if (isset($_POST["Add_Cart"])) {

    include_once 'DB_Connect.php';

    $sql = "SELECT * FROM `images` WHERE `ImgID`='".$_GET['id']."'";
    $id=$_GET['id'];   
    
    $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $sql = "INSERT INTO `cart`(`Email`,`Image`,`Name`, `ImgID`, `Price`) VALUES ('".$_SESSION["txtemail"]."','".$row['Image']."','".$row['Title']."','".$_GET['id']."','".$row['Price']."')";
                mysqli_query($con, $sql);
                header("Location:../User/ImageBuy.php?id={$id}");
         
            }}

        }

?>