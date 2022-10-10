<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Alert</title>
    <link rel="stylesheet" href="../CSS/thankyou.css">
</head>
<body>

<?php if($_GET['id']==1){
    echo"
    <div class='content'>
        <div class='thank'>
            <div class='title'>
                <h3 style='color:green ;'>We send the password to your E-mail</h3>
            
            <a href='../HTML/Login.php' style='margin-top:20px ;'>Back To Sign In</a></div>
        </div>
    </div>  "; 
    }

   else if($_GET['id']==0){
        echo"
        <div class='content'>
            <div class='thank'>
                <div class='title'>
                    <h3 style='color:green ;'>E-mail doesn't match with any registered Emails</h3>
                
                <a href='../HTML/forgotpass.php' style='margin-top:20px ;'>Try Again</a></div>
            </div>
        </div>  "; 

    }
?>

</body>
</html>