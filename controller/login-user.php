<?php
	require_once(__DIR__ . /../model/config.php);
	//need to config file

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//need to filter input for login

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");