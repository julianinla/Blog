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

	// if($query) {
	// 	echo "<p>Successfully inserted post: $title</p>"; //echos if successful
	//	echo "Posted: " . $date->format("M/D/Y")
	// }
	// else {
	// 	echo "<p>" . $_SESSION["connection"]->error . "</p>"; //echos if unsuccessful
	// }
	//letting us now if creating query was successful

	$database = "blog_db";
		$connection = mysqli_connect("localhost", "root", "root", $database);
		




		$q = "SELECT * FROM posts";
		$r = mysqli_query($connection, $q);

		if($r){
			while ($row = mysqli_fetch_array($r)) {
			 	echo "<div class='post'>";
			 	echo "<h2>" . $row['title'] . "</h2>";
			 	echo "<br/>";
			 	echo "<p>" . $row['post'] . "</h1>";
			 	echo "<br/>";
			 	// echo "<img src=get.php?id=" . $row['id'] . "/>";
			 	// echo "<br/>";
			 	// echo "<span class='footer'>Posted By: " . $row['author_id'] . " Posted On: " . $row["date_posted"] . "</span>";
			 	echo "</div>";
		 }
	 }