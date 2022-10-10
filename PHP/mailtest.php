<?php
 

	

			$name = $_POST['name']; //$_POST['name'];
			$visitor_email= $_POST['mail'];//$_POST['email'];//customer
			//$subject ='Hiiiiii';// $_POST['subject'];
			$message =$_POST['message'];//$_POST['message'];
			
			$email_from = 'nilupul2001chalana@gmail.com';
			
			$email_subject = 'New Contact Submission';
			
			$email_body = "User Name: $name.\n". 
				   			"User Email:$visitor_email.\n".
							  //"Subject: $subject.\n".
								"User Message: $message.\n";
			$to = 'nilupul2001chalana@gmail.com';
			
			$headers = "From: $email_from \r\n";
			
			$headers = "Reply-To: $visitor_email \r\n";
			
			if(	mail($to,$email_subject,$email_body,$headers))
			
            echo "Email sent";
        else
            echo "Email sending failed";
			//header("location: contactus.php");
 		
?>
