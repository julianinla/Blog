
	<?php 
		//not html file

		require_once(__DIR__ . "/controller/login-verify.php");

		require_once(__DIR__ . "/view/header.php");
		//allows us to access the header code
		
		if(authenticateUser()) {
			require_once(__DIR__ . "/view/navigation.php");
			//gives access to nav.php for use in blog
		}

		require_once(__DIR__ . "/view/header.php");
		//allows us to access the header code

		require_once(__DIR__ . "/controller/create-db.php");
		//require once to use controller

		require_once(__DIR__ . "/controller/read-posts.php");

	?>

