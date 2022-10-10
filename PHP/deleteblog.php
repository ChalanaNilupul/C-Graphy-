<?php
include_once '../PHP/DB_Connect.php';

$sql = "DELETE FROM `blogs` WHERE `blogID`=".$_GET['id']."";

$result = mysqli_query($con, $sql);

header("Location:../HTML/Blog.php");


?>