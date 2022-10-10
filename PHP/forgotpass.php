
<?php
include_once '../PHP/DB_Connect.php';
$email = $_POST['Email'];

$sql = "SELECT * FROM `user` WHERE `Email`='" . $email . "'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {

		$fullname	= $row['Name'];
		$pass = $row['Password'];
		$message	= $row['Post'];
	}
	

	$subject	= 'Password For CGraphy Website is ' . $pass;
	

	$to	 		  = $email;
	$mail_subject = 'Password For C Graphy';
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
   width: 700px;
}
.out
{
    justify-content: center;
    flex: wrap;
    display:block ;
}
.banner
{
    font-size: 40px;
    height: 50px;
    width: 100%;
    background-color: antiquewhite;
    padding: 20px;
	margin-left:90px;
}
.in
{
    margin-top: 10px;
    color: rgb(255, 255, 255);
    font-size: 25px;
    width: 100%;
    padding: 20px;
}

    </style>
</head>
<body>
    <div class='content'>
        <div class='out'>
                <div class='banner'>
                    C Graphy
                </div>
                <div class='in'>
                    Your E-mail and Password<br>
                    E-mail &nbsp; :&nbsp; {$email}<br>
                    Password &nbsp; :&nbsp;  {$pass}
                </div>
                <div class='in' style='margin-top: 0;font-size:19px'>
                    cgraphyweb@gmail.com
                </div>
        </div>

    </div>
</body>
</html>
	
	
	
	";


	$header       = "From: {$email}\r\nContent-Type: text/html;";

	$send_mail_result = mail($to, $mail_subject, $email_body, $header);

	if ($send_mail_result) {
		echo "Message Sent.";
		header("Location:../User/passforgotalertpage.php?id=1");
	} else {
		echo "Message Not Sent.";
	}
} 
else {

	header("Location:../User/passforgotalertpage.php?id=0");
}
?>