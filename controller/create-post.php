<?php 

	require_once(__DIR__ . "/../model/database.php");
	//connecting file to the database
	//gives access to sqli vars

	$connection = new mysqli($host, $username, $password, $database);
	//created connection with now accessible vars

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//filters malicious input for our titles
	//santizes and stops hacking our blog for most part
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	$query = $connection->query("INSERT INFO posts SET title = '$title', post = '$post'");
	//creating query for information for the database

	if($query) {
		echo "<p>Successfully inserted post: $title</p>"
	}
	else {
		echo "<p>$connection->error</p>"
	}
	//letting us now if creating query was successful

	$connection->close();
	//close the connection 