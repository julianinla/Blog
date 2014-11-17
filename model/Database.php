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

		}
		//to replace opening connection

		public function closeConnection() {
			
		}
		//to replace closing connection

		public function query($string) /* passing through string for query */ {
			
		}
		//to replace query code
	}
	//the class is being used for its convenience in refactoring our code
	//if we use the class then each time less code is being written 
