
<?php session_start();

if (!isset($_SESSION["txtemail"])) {
    header("location:../HTML/Login.php");

} 

?>
<?php include '../PHP/DB_Connect.php'  ?>

<?php

/*----------------------------Insert into payment database------------------------------------------*/

$number = $_POST["number"];
$date = $_POST["date"];
$cvv = $_POST["cvv"];

$sql1 = "INSERT INTO `paymentdetails` (`Email`, `Number`, `Date`, `CVV`) VALUES ('" . $_SESSION["txtemail"] . "','" .  $number . "','" . $date . "','" . $cvv . "');";
$result4 = mysqli_query($con, $sql1);

if (mysqli_query($con, $sql1)) {

    /*----------------------------GET ITEMS from cart------------------------------------------*/



    $sql2 = "SELECT * FROM `cart` WHERE `Email`='" . $_SESSION["txtemail"] . "'";


    $result1 = mysqli_query($con, $sql2);

    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {

            /*----------------------------iNSERT INTO PURCHASE TABLE------------------------------------------   */

          $sql3 = "INSERT INTO `purchase_details` (`Email`, `ImgID`, `Price`) VALUES ('" . $_SESSION["txtemail"] . "','" . $row['ImgID'] . "','" . $row['Price'] . "');";

            $result3 = mysqli_query($con, $sql3);
        }
    }

    /*----------------------------clear  cart------------------------------------------ */
    $sql = "DELETE FROM `cart` WHERE `Email`='" . $_SESSION["txtemail"] . "'";

    $result = mysqli_query($con, $sql);

   


    /*------------------------------------Send a email-------------------------------------------------*/ 
       
	
		$email='nilupul2001chalana@gmail.com';
	

		$to	 		  = $_SESSION["txtemail"];
		$mail_subject = 'Thank You For Puchasing My Items';
		$email_body   = "
        
        <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
body
{
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';
    
}
.content
{
    margin-top: 10%;
    justify-content: center;
    flex: wrap;
    display:flex ;
    background-color: rgb(0, 0, 0);
   justify-content: center;
   padding-top: 50px;
   padding-bottom: 50px;
   padding-left: 50px;
   padding-right: 20px;
   width: 500px;
}
.out
{
    justify-content: center;
    flex: wrap;
    display:block ;
}
.banner
{
    font-size: 30px;
    height: 50px;
    width: 100%;
    background-color: antiquewhite;
    padding: 20px;
}
.in
{
    margin-top: 10px;
    color: rgb(255, 255, 255);
    font-size: 18px;
    width: 100%;
    padding: 20px;
}

    </style>
</head>
<body>
    <div class='content'>
        <div class='out'>
                <div class='banner'>
                    Payment Successfull 
                </div>
                <div class='in'>
                Hello<br>
                Thank you for purchasing My items, get in touch for buy more things from CGraphy Store<br>
                Chalana Nilupul
                   
                </div>
                <div class='in' style='margin-top: 0;font-size:19px'>
                    C Pay
                    cgraphyweb@gmail.com
                </div>
        </div>

    </div>
</body>
</html>
        
        
        ";
		

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
            header("Location:../User/thankyou.php");
		} else {
			echo "Message Not Sent.";
		}
} 
else {
    echo "Error";
}  

?>