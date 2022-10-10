<?php
include_once '../PHP/DB_Connect.php'  ;

$sql = "SELECT * FROM `purchase_details`";

$result = mysqli_query($con, $sql);

$tot=0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

    
        $price = $row['Price'];
                                    

        $value = (int)$price;
        $tot = $tot+$value;

        
    }
}
echo $tot;

?>