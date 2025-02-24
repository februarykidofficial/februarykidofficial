<?php
	if (empty($_POST['name_sm_41525']) && strlen($_POST['name_sm_41525']) == 0 || empty($_POST['email_sm_41525']) && strlen($_POST['email_sm_41525']) == 0 || empty($_POST['message_sm_41525']) && strlen($_POST['message_sm_41525']) == 0)
	{
		return false;
	}
	
	$name_sm_41525 = $_POST['name_sm_41525'];
	$email_sm_41525 = $_POST['email_sm_41525'];
	$message_sm_41525 = $_POST['message_sm_41525'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nName_Sm_41525: $name_sm_41525 \nEmail_Sm_41525: $email_sm_41525 \nMessage_Sm_41525: $message_sm_41525 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_sm_41525";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>