<?php

	require_once(__DIR__ . "/../model/config.php");

	require_once(__DIR__ . "/../controller/login-verify.php");

	if(!authenticateUser()) {
		header("Location: " . $path . "index.php");
		die();
	}

?>

<h1 align="center">Create Blog Post</h1>
<!-- at top text says this^ -->

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
<!-- allowing post to be created in form by connecting via path -->
	<div>
		<label for="title" class="sr-only">Title</label>
		<!-- gives first text box title -->
		<input type="text" name="title" placeholder="Title" align="center">
		<!-- creates small text box -->
	</div>
	<div>
		<label for="post" class="sr-only">Post</label>
		<!-- names text area post -->
		<textarea name="post" placeholder="Post"></textarea>
		<!-- text area bigger text box than -->
	</div>
	<div>
		<button type="submit" class="btn btn-default btn-large">Submit</button>
		<!-- button to subit our blog posts -->
	</div>
</form>