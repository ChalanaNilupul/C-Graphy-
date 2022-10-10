<?php
    include_once 'DB_Connect.php';
    $sql="SELECT COUNT(*) AS total FROM `bloglikes` WHERE `blogID` = '11';";
    $result = mysqli_query($con,$sql);

    $count=mysqli_fetch_assoc($result);
    $tot=$count['total'];
    echo $tot;

?>