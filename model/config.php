<?php

	require_once(__DIR__ . "/Database.php");
	//require once for database
	session_start();
	//use for session var $connection

	$path = "/Blog/";
	//used for fixing path for future changes

	//former db code
	$host = "localhost"; //local host variables
	$username = "root"; //username variable
	$password = "root"; //password variables
	$database = "blog_db"; //database variable
	//initalizing required variables for database

	if(isset($_SESSION["connection"])) { /* want to determine if var has value */
		//need to create new database object based on class
		$connection = new Database($host, $username, $password, $database);
		//passing variables
		//going to help query database

		$_SESSION["connection"] = $connection;
		//assigning connection var to session var
	}