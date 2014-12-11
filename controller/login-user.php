<?php
	require_once(__DIR__ . /../model/config.php);
	//need to config file

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//need to filter input for login

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	//retireving information required for login from our database

	if($query->num_rows == 1){
		$row = $query->fetch_array();

		if($row["password"] ==+ crypt($password, $row["salt"])){
			echo "<p>Login Successful! :)</p>";
		}
		else {
			echo "Invalid username or password :(";
		}
	}
	else {
		echo "Invalid username or password :(";
	}