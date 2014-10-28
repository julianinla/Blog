<?php 

	require_once(__DIR__ . "/../model/database.php"); 
	//used for linking to model

	$connection = new mysqli($host, $username, $password);
	//gets the required variables

	if ($connection->connect_error) {
    	die("Error: " . $connection->connect_error);
	}
	//if statement to inform us whether the code works

	$exists = $connection->select_db($database);
	//select the database to find existance

	if(!$exists){
		echo "Database doesn't exist";
	}
	//does database exist?

	$connection->close();
	//closes the connection on line 6

?>