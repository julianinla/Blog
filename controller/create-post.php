<?php 

	require_once(__DIR__ . "/../model/config.php");
	//connecting file to the database
	//gives access to sqli vars

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//filters malicious input for our titles
	//santizes and stops hacking our blog for most part
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//similar filter for posts
	$date = new DateTime('today');
	//used for time store
	$time = new DateTime('America/Los_Angeles');
	//used for date store

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
	//creating query for information for the database

	if($query) {
		echo "<p>Successfully inserted post: $title</p>"; //echos if successful
		echo "Posted on " . $date->format("Y-m-d") . " @ " . $time->format("g:i");
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //echos if unsuccessful
	}
	//letting us now if creating query was successful