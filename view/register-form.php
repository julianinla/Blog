<?php
	require_once(__DIR__ . "/../model/config.php");
	//requiring our config file
?>

<br> <br> <br> <br> <br> <br>
<h1 align="center"> Register </h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<!-- pathing our form to create-post -->

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
		<button type="submit" class="btn btn-default center">Register</button>
		<!-- button to subit for registration -->
	</div>
	
</form>

<?php 

