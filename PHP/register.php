<!--------------------------------------------------------------------------------Register------------------------------------------------------------------------------------------->
<?php



if (isset($_POST["submit"])) {
  $name = $_POST["username"];
  $email = $_POST["mail"];
  $pass = $_POST["password"];


  $con = mysqli_connect("localhost", "root", "", "cngraphy");

  if (!$con) {
    die("Connect to a database");
  }
  $sql = "SELECT * FROM `user` WHERE `Email`='" . $email . "'";

  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email is already registered')</script>";
  } else {
    $sql = "INSERT INTO `user` (`Name`,`Email`,`Password`,`PPic`) VALUES ('" . $name . "','" . $email . "','" . $pass . "','../Uploads/PPic/default.png');";

    if (mysqli_query($con, $sql)) {


     
      $mail = 'nilupul2001chalana@gmail.com';
     

      $to         = $email;
      $mail_subject = 'C Graphy';
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
          width: 500px;
          background-color: rgb(0, 0, 0);
          justify-content: center;
         padding-top: 50px;
         padding-bottom: 50px;
         padding-left: 20px;
         padding-right: 20px;
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
                          Welcome To C Graphy
                      </div>
                      <div class='in'>
                          You Registered Successfully!
                      </div>
                      <div class='in' style='margin-top: 0;font-size:19px'>
                          cgraphyweb@gmail.com
                      </div>
              </div>
      
          </div>
      </body>
      </html>
      
      
      ";
     

      $header       = "From: {$mail}\r\nContent-Type: text/html;";

      $send_mail_result = mail($to, $mail_subject, $email_body, $header);

      if ($send_mail_result) {
        header("Location:../User/thankyou.php");
      } else {
        echo "Message Not Sent.";
      }

      header("Location:../HTML/Login.php");
    }
  }
}


?>