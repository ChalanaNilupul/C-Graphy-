<?php 
	
	// checking if the form is submit
	//if ( isset($_POST['submit']) ) {
		$fullname	= $_POST['name'];
		$email		= $_POST['email'];
		$subject	= 'Contact Us Form';
		$message	= $_POST['message'];

		$to	 		  = 'nilupul2001chalana@gmail.com';
		$mail_subject = 'Message from Website';
		$email_body   = "Message from Contact Us Page of the Website: <br>";
		$email_body   .= "<div class='from' style='color: green;><b>From:</b> {$fullname}</div> <br>";
		$email_body   .= "<div class='subject' style='color: red;><b>Subject:</b> {$subject} </div><br>";
		$email_body   .= "<div  class='message' style='color: blueviolet;'><b>Message:</b><br>{$message}</div>"; //. nl2br(strip_tags($message));

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
			echo "Message Sent.";
		} else {
			echo "Message Not Sent.";
		}
//	}
 ?>



