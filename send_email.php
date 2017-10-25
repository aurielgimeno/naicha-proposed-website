
	<?php
	function spamcheck($field){
		//sanitize e-mail address
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
		//Validate e-mail address
		if(filter_var($field, FILTER_VALIDATE_EMAIL)){
			return TRUE;
		}else{
			return FALSE;
		}
	
	}
	/*
		sender_name
		sender_email
		sender_contact
		subject
		message
		
		err_msg
	*/
	if(isset($_POST['submit'])){
	$sender_name = $sender_email = $sender_contact = $subject = $sender_message = "";
	$sender_name_err = $sender_email_err = $sender_contact_err = $subject_err = $sender_message_err = "";
	

		 if (isset($_POST['sender_name'])) {
			//check $sender_name
			if(!empty($_POST['sender_name'])){
				$sender_name = $_POST['sender_name'];
			}else{
				$sender_contact_err = "* Please provide your name";
				
			}
			}
			//check $sender_email
			if(!empty($_POST['sender_email'])){
				// Check if "from" email address is valid
				$mailcheck = spamcheck($_POST["sender_email"]);
				if ($mailcheck==FALSE){
					$sender_email_err = "* Invalid Email Address";
					
				}else{
					$sender_email = $_POST['sender_email'];
					
					}
			}else{
				$sender_email_err = "* Please provide your email address";
				
			}
			
			
			//check $sender_contact
			
			
			//check $subject
			
			if(!empty($_POST['subject'])){
				$subject = $_POST['subject'];
				
			}else{
				$subject_err = "* Please provide a subject";
				
			}
			
			//check $message
			if(!empty($_POST['sender_message'])){
				$sender_message = $_POST['sender_message'];
				
			}else{
				$sender_message_err = "Please Provide a message";
				
			}
			
			//check if no errors
			if(isset($sender_name) and isset($sender_email) and isset($subject) and isset($sender_message)){
				$message = "From: $sender_name \r \n";
				$message .= "Email: $sender_email \r \n";
				$message .= "Contact: $sender_contact \r \n";
				$message .= "Subject: $subject \r \n";
				$message .= "Message: $sender_message \r \n";
				$message = wordwrap($message, 70);
				$send_mail = mail("auriel.gimeno@gmail.com",$subject,$message,"From: $sender_email\n");
				if($send_mail){
					echo '<script> alert("Thank you for your feedback \\n Your Feedback has been sent") </script>';
					echo '<script language="JavaScript"> window.location.href ="contact_us.php" </script>';
				}else{
					echo '<script> alert("Something went wrong \\n Your Feedback has not been sent") </script>';
					echo '<script language="JavaScript"> window.location.href ="contact_us.php" </script>';
				}
			}
			else{
				echo '<script> alert("Something went wrong \\n ") </script>';
				echo '<script language="JavaScript"> window.location.href ="contact_us.php" </script>';
			
			}
			
			
	
			
	}
?>

