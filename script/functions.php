<?php

	function getPosts($tableName){
	$sql = "SELECT * FROM $tableName ORDER BY id ASC";
	$result = mysql_query($sql);
	$posts = array();
	while($post = mysql_fetch_assoc($result)) {
		$posts[] = $post;
	}
	return $posts;
}


	function getLikes($c){
	$sql = "SELECT * FROM post_likes WHERE category='$c'";
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews($c){
	$sql = "SELECT * FROM post_views WHERE category='$c'";
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}

	function getPostById($post_id, $tableName){

	$sql = "SELECT * FROM $tableName WHERE id=$post_id";
	$result = mysql_query($sql);
  $post = mysql_fetch_assoc($result);
	return $post;
}
	function getPostsCounts($tableName){

	$sql = "SELECT * FROM $tableName";
	$result = mysql_query($sql);
  $num_rows = mysql_num_rows($result);
	return $num_rows;
}



?>