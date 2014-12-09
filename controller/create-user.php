<?php 

	require_once(__DIR__ . "/../model/config.php");
	//link to our config

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//recieving the input for our email/username, filtering it 

	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//same things for our password

	echo $email . " - " . $username . " - " . $password;
	//sending profile info

	//encryption
	$salt = "$5$" . "rounds=5000$" . uniqid(nt_rand(), true) . "$";

	$hashedPassword = crypt($password, $salt);
	echo $hashedPassword;