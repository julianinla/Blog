<?php 

	require_once(__DIR__ . "/../model/config.php"); 
	//used for linking to model

	$connection = new mysqli($host, $username, $password);
	//gets the required variables
	//represents connection

	if ($connection->connect_error) {
    	die("Error: " . $connection->connect_error);
	}
	//if statement to inform us whether the code works

	$exists = $connection->select_db($database);
	//select the database to find existance

	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database");
		if($query){
			echo "<p>Succesfully created database " . $database . "</p>";
		}
	}
	else {
		echo "<p>Database already exists</p>";
	}
	//afer creation, does database exist?
	//lets us know yes or no

	$query = $connection->query("CREATE TABLE posts (" //create table for posts
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
		echo "<p>$connection->error</p>";
	}
	//check if query exists, echo message
	//else give different message

	$connection->close();
	//closes the connection on line 6

?>