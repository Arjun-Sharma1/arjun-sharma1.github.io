<?php
	require 'mailgun/vendor/autoload.php';
	use Mailgun\Mailgun;

  $name = $_GET['name'];
  $email = $_GET['email'];
  $subject = "AS: Message from " . $name;
  $message = "Name: " . $name . "\nEmail: " . $email . "\nMessage:\n" . $_GET['message'];

	$mg = Mailgun::create('key-790802ed8bf003fe6a0c9fba1f1ecb41');
	$domain = "sandboxc25a3c5193384a9d883939287fa951e2.mailgun.org";

	$mg->messages()->send($domain, [
		'from'=>'mail@arjun-sharma.com',
		'to'=> 'a.sharma11@live.ca',
		'subject' => $subject,
		'text' => $message
	]);
?>
