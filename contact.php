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

				$mail = "<html><head><style> th,td{padding:10px;} th{background:#DEDEDE;} </style></head><body> <table> <tr> <th>Name :</th><td> $name</td></tr> <tr><th> Email :</th><td> $email </td></tr><tr> <th>Message :</th> <td>$message</td></tr></table></body></html>";

				$subject = "Octapixel Enquiry";

				$from = $email;
				$to = "hello@octapixel.com";
				$cc = "arunko350@gmail.com,ramkrishna.info@gmail.com,krishnabette@gmail.com";
				$headers = "From:" . $from ."\r\n";
				$headers .=  'Cc:'.$cc. "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				mail($to, $subject, $mail, $headers);


			    echo "Thank you for contacting us. We will get back to you ASAP.";
		    }
	  }
	else
	  {
	  	echo "Please enter the valid details.";
	  }

 ?>