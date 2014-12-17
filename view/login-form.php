<?php
	require_once(__DIR__ . "/../model/config.php");
	//requiring our config file
?>

<br> <br> <br> <br> <br> <br>
<h1 align="center">Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	<div>
		<label for="email">Email: </label>
		<input type="text" name="email" />
		<!-- creating input for email  for account -->
	</div>

	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
		<!-- creating input for username for account -->
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
		<!-- creating input for password  for account -->
	</div>

	<div>
		<button type="submit" class="btn btn-default btn-large inline">Login</button>
		<!-- button to subit for login -->
	</div>

	<div>
		<a href="register.php" class="btn btn-default btn-large inline">Register Here</a>
		<!-- button to subit for login -->
	</div>
</form>