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
		<h2 class="title">
			<a href="<?php echo $path . "/index.php" ?>">
				The Beat
			</a>
		</h2>
		<section class="inline">
			<a href="<?php echo $path . "login.php" ?>" rel="" class="links nav"> Profile </a>
		</section>
	</header>