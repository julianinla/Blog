<?php 

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//filters malicious input for our titles
	//santizes and stops hacking our blog for most part
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title </p>";
	//echos text typed into the title for blog posts
	echo "<p>Post: $post </p>";
	//echos text typed into the title for blog posts