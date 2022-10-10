<?php
include_once 'DB_Connect.php';

$sql = "DELETE FROM `cart` WHERE `ImgID`=".$_GET['id']."";

$result = mysqli_query($con, $sql);

header("Location:../User/cart.php");


?>