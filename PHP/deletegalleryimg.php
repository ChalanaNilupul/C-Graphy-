<?php
include_once 'DB_Connect.php';

$sql = "DELETE FROM `images` WHERE `ImgID`=".$_GET['id']."";

$result = mysqli_query($con, $sql);

header("Location:../HTML/galleryNew.php");


?>