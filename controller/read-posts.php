<?php
	require_once(__DIR__ . "/../model/config.php");

	$query = "SELECT * FROM posts ORDER BY id DESC";
	$result = $_SESSION["connection"]->query($query);

	if($result){
		while ($row = mysqli_fetch_array($result)) {
				echo "<br/>";
			 	echo "<div class='post readmore-js-section readmore-js-collapsed'>";			 	
			 	echo "<h2>" . $row['title'] . "</h2>";
			 	// echo "Posted on " . $row['DateTime'];
			 	echo "<br/>";
			 	echo "<p>" . $row['post'] . "</h1>";
			 	echo "<br/>";
			 	// echo "<img src=get.php?id=" . $row['id'] . "/>";
			 	// echo "<br/>";
			 	// echo "<span class='footer'>Posted By: " . $row['author_id'] . " Posted On: " . $row["date_posted"] . "</span>";
			 	echo "</div>";
		 }
	 }