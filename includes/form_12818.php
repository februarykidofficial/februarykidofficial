<?php
	if (empty($_POST['imie_sm']) && strlen($_POST['imie_sm']) == 0 || empty($_POST['email_sm']) && strlen($_POST['email_sm']) == 0 || empty($_POST['wiadomosc_sm']) && strlen($_POST['wiadomosc_sm']) == 0)
	{
		return false;
	}
	
	$imie_sm = $_POST['imie_sm'];
	$email_sm = $_POST['email_sm'];
	$wiadomosc_sm = $_POST['wiadomosc_sm'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nImie_Sm: $imie_sm \nEmail_Sm: $email_sm \nWiadomosc_Sm: $wiadomosc_sm \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_sm";

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