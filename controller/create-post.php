<?php 

	require_once(__DIR__ . "/../model/config.php");
	//connecting file to the database
	//gives access to sqli vars

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//filters malicious input for our titles
	//santizes and stops hacking our blog for most part
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
	//creating query for information for the database

	if($query) {
		echo "<p>Successfully inserted post: $title</p>"; //echos if successful
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //echos if unsuccessful
	}
	//letting us now if creating query was successful
