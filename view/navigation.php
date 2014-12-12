<?php
	require_once(__DIR__ . "/../model/config.php");
	//accesses $path in config.php

	require_once(__DIR__ . "/../controller/login-verify.php");

	if(!authenticateUser()) {
		header("Location: " . $path . "index.php");
		die();
	}
?>

<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
		<!-- nav to post.php
			 .. to get out of folder 
			 nvm get rid of dots for new path 
			 php tags echoing code from php 
			 paths for use when changing folder name-->
	</ul>
</nav> 