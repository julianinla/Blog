<?php 

	require_once(__DIR__ . "/../model/config.php");
	//link to our config

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//recieving the input for our email/username, filtering it 

	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//same things for our password

	//encryption
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	$hashedPassword = crypt($password, $salt);
	//encrypting the password/salt

	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
	. "email = '$email',"
	. "username = '$username'," 
	. "password = '$hashedPassword',"
	. "salt = '$salt'");
	//connection as we have done

	if($query){
		echo "Successfully created user: $username";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}