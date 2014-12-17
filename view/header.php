<?php
	require_once(__DIR__ . "/../model/config.php");
	//accesses $path in config.phpso we have earsier directory naming
?>

<html>
	<head>
		<title>
			Blog
		</title>
	</head>
	<body id="bodyback">
	<!-- header html code
    wear we put in our links -->
    <link rel="stylesheet" type="text/css" href="<?php echo $path . "/css/main.css" ?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo $path . "/css/bootstrap-theme.css" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $path . "/css/bootstrap.css" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $path . "/css/normalize.css" ?>">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <!-- links to main, bootstrap css files -->


	<header id='head'>
		<h2 class="title inline">
			<a href="<?php echo $path . "/index.php" ?>" id="mainlink">
				The Beat
			</a>
		</h2>
		<section class="inline">
			<div class="dropdown">
			  <button id="dLabel" class="links inline" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
			    Profile
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			    <a href="<?php echo $path . "/login.php" ?>"> Login </a>
			    <a href="<?php echo $path . "/register.php" ?>"> Register </a>
			  </ul>
			</div>
		</section>
	</header>