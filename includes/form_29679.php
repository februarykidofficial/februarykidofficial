<?php
	if (empty($_POST['imie_md']) && strlen($_POST['imie_md']) == 0 || empty($_POST['email_md']) && strlen($_POST['email_md']) == 0 || empty($_POST['wiadomosc_md']) && strlen($_POST['wiadomosc_md']) == 0)
	{
		return false;
	}
	
	$imie_md = $_POST['imie_md'];
	$email_md = $_POST['email_md'];
	$wiadomosc_md = $_POST['wiadomosc_md'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nImie_Md: $imie_md \nEmail_Md: $email_md \nWiadomosc_Md: $wiadomosc_md \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_md";

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