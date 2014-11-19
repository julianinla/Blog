<?php

	//this fle will be used for repeated info
	//shortens code being written
	//easier to read/maintain
	
	class Database {
		private $connection;
		//first variable we are creating
		//only accessible in this file

		private $host;
		private $username;
		private $password;
		private $database;
		//initiliazing variables similar to above
		//all are private 

		public function __construct($host, $username, $password, $database) {
			$this->host = $host; 
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
			//accesses the host variable
		}
		//construct function to be accessed for new obj creation

		public function openConnection() {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database) 
			//create new mysqli object 
			
			if ($this->connection->connect_error) {
    			die("Error: " . $connection->connect_error); //if statement to inform us whether the code works
			}
		}
		//to replace opening connection
		//opens new object, checks if it works, closes function if fails

		public function closeConnection() {
			if(isset($this->connection)) {
				$this->connection->close(); //closes the connection
			} 
			//checks whether variable set/not
			//whether or not something in variable
		}
		//to replace closing connection

		public function query($string) /* passing through tstring for query */ {
			$this->openConnection(); 
			//code to execute openConnection()

			$query = $this->connection->query($string); //accessing query function
			//creating/assigning to query

			$this->closeConnection();
			//closing connection using closeConnection()

			return $query;
			//returning the result
		}
		//to replace query code
	}
	//the class is being used for its convenience in refactoring our code
	//if we use the class then each time less code is being written 
