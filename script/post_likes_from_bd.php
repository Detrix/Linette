<?php 	
	require 'connect.php'; 

	$postID = $_POST['postID'];
	$categoryID = $_POST['categoryID'];

	$sql = "SELECT * FROM post_likes";

	$w = mysql_query($sql);

	$likesCount = 0;
	while($like = mysql_fetch_assoc($w)) {
		if ($like['post_id'] == $postID && $like['category'] == $categoryID){
			$likesCount++;
		}
	}

	echo $likesCount;
?>