<?php session_start();

if(!isset($_SESSION["txtemail"]))
{
	header("location:../HTML/Login.php");
	
}   ?>
<?php include_once '../PHP/DB_Connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Image</title>
    <link rel="stylesheet" href="../CSS/fadein.css">
    <link rel="stylesheet" href="../CSS/imgbuy.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="content">




        <?php
        $sql = "SELECT * FROM `images` WHERE `ImgID`='" . $_GET["id"] . "'";
        $result = mysqli_query($con, $sql);
        $id=$_GET['id'];

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {


                echo "
				
                <div class='backimg'><a href='../HTML/galleryNew.php'>Back</a></div>
				
                <div class='back'>
                <div class='image'><img src='".$row["Image"]."' alt='' width='400px'></div>
                <div class='inner'>
                    <h1>".$row["Title"]."</h1>
                    <p>".$row["Description"]."</p>
                    <p>Price : ".$row["Price"]."&nbsp;$</p>
                    <form action='../PHP/Addtocart.php?id={$id}' method='POST'>
                    <button name='Add_Cart'>Add To Cart</button>
                    </form>
                </div>
            </div>
      
        ";
            }
        }


        ?>


    </div>
	<script>
		function cart(){
		var
		var ico=document.getElementById('cart');
		
	}
	</script>
</body>

</html>