<?php 

	function spamcheck($field)
	  {
		  //filter_var() sanitizes the e-mail
		  //address using FILTER_SANITIZE_EMAIL
		  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

		  //filter_var() validates the e-mail
		  //address using FILTER_VALIDATE_EMAIL
		  if(filter_var($field, FILTER_VALIDATE_EMAIL))
		    {
		    return TRUE;
		    }
		  else
		    {
		    return FALSE;
		    }
	  }

	if (isset($_REQUEST['email']) && isset($_REQUEST['name']) && isset($_REQUEST['message']))
	  {

		  $mailcheck = spamcheck($_REQUEST['email']);
		  if ($mailcheck==FALSE)
		    {
		    	echo "Invalid email.";
		    }
		  else
		    {
			    $name = $_REQUEST['name'];
				$email = $_REQUEST['email'];
				$message = $_REQUEST['message'];

				$mail = "Name : $name <br> Email : $email <br> Message : $message";

				$subject = "Octapixel Enquiry";

				$from = $email;
				$to = "hello@octapixel.com";
				$cc = "arunko350@gmail.com,ramkrishna.info@gmail.com,krishnabette@gmail.com";
				$headers = "From:" . $from;
				$headers .=  'Cc: somebody@domain.com' . "\r\n";

				mail($to, $subject, $mail, $headers);


			    echo "Thank you for contacting us. We will get back to you ASAP.";
		    }
	  }
	else
	  {
	  	echo "Please enter the valid details.";
	  }

 ?>