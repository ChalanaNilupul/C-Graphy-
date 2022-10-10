<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:../HTML/Login.php");
	
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../CSS/cart.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="body">
        <div class="content">
            <div class="table">
                <ul class="head" style="border-bottom: 1px solid black;">
                    <div style="width:50% ;">
                        <li>Item</li>
                    </div>
                    <div style="width:50% ;">
                        <li>Price</li>
                    </div>
                </ul>

                <?php



                include_once '../PHP/DB_Connect.php';

                $sql = "SELECT * FROM `cart` WHERE `Email`='".$_SESSION["txtemail"]."'";

                $tot=0;
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        /*--------------------------------Calculate Total------------------------------*/
                        $price = $row['Price'];


                        $value = (int)$price;
                        $tot = $tot + $value;

                        /*--------------------------------Calculate Total------------------------------*/

                        echo "

                <ul class='head' style='font-size: 20px;'>
                    <div style='width:73% ;  justify-content: left;flex: wrap;display:flex ;'>
                        <li> <img src='" . $row['Image'] . "' alt='' width='100px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Name'] . " </li>
                    </div>
                    <div style='width:12% ;justify-content: left;flex: wrap;display:flex ;'>
                        <li>" . $row['Price'] . "&nbsp;$</li>
                    </div>
                    <div style='width:15% ;justify-content: left;flex: wrap;display:flex ;'>
                        <li> <form action='../PHP/DeleteCartItem.php?id=" . $row["ImgID"] . "' method='POST'>
                        <button class='delete'> <i class='fa fa-trash' aria-hidden='true'></i></button>
                        
                </form></li>
                    </div>
                </ul>    
                ";   

                

                    }
                }

                ?>

			
            </div>
        </div>
        <div class="total">
            <div class="bar">
                Total :&nbsp;<?php  echo $tot; ?>&nbsp;$
            </div>

        </div>
        <div class="btnout">
            <div class="btn"><a href="../HTML/galleryNew.php"><button>Back</button></div></a>
            <div class="btn">
				
               <a href="../User/payment.php"><button style="float: right;" name="purchase">Purchase Now</button></a>
                
            </div>

        </div>
    </div>
</body>

</html>