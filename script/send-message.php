<?php
	require 'mailgun/vendor/autoload.php';
	use Mailgun\Mailgun;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "KW: Message from " . $name;
    $message = "Name: " . $name . "\nEmail: " . $email . "\nMessage:\n" . $_POST['message'];

	$mg = new Mailgun(getenv('MAILGUN_API_KEY'));
	$domain = "arjun-sharma.com";

	$mg->sendMessage($domain, array(
	'from'=>'mail@arjun-sharma.com',
	'to'=> 'a.sharma11@live.ca',
	'subject' => $subject,
	'text' => $message
	    )
	);
?>
