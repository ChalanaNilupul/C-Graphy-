<?php session_start();

if (!isset($_SESSION["txtemail"])) {
    header("location:../HTML/Login.php");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../CSS/payment.css">
</head>

<body>
    <div class="content">
        <div class="head">
            <h1 style="">C Pay</h1>
        </div>

        <div class="container">
            <div class="title">
                <h1 style="text-align:left ;margin-bottom: 0;color:rgb(250, 110, 140) ;">C Pay</h1>
                <h1 style="font-size: 70px;text-align: left;margin-top: 0">Payment at your finger tips</h1> <img src="../Images/visa-9.svg" alt="" width="500px">
            </div><br>

            <div class="form">
                <div class="form-in">
                    <form action="../PHP/clearcartandaddpurchasedetails.php" method="POST">
                        <h3>Your Card Number</h3>
                        <input type="text" name="number" id="number" placeholder="Card Number" required><br>
                        <h3>Your Card Number</h3>
                        <input type="date" name="date" id="date" required><br>
                        <h3>CVV</h3>
                        <input type="text" name="cvv" id="cvv" placeholder="CVV" required><br>
                      
                        <button class="pay">PAY NOW</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

</body>

</html>