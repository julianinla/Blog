<?php 

	require_once(__DIR__ . "/../model/config.php"); 
	//used for linking to model

	$query = $_SESSION["connection"]->query("CREATE TABLE posts (" //create table for posts
			. "id int(11) NOT NULL AUTO_INCREMENT," //ids need info/auto increment
			. "title varchar(255) NOT NULL," //title is needed
			. "post text NOT NULL," //text needed
			. "PRIMARY KEY (id))"); //created primary key?
	//used dfor creating table
	//identifies info for blog posts

	if($query){
		echo "<p>Successfully created table: posts</p>";
	}
	else {
		echo "<p" . $_SESSION["connection"]->error . "</p>";
	}
	//check if query exists, echo message
	//else give different message

?>