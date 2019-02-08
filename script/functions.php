<?php

	function getPosts($tableName){
	$sql = "SELECT * FROM $tableName";
	$result = mysql_query($sql);
	$posts = array();
	while($post = mysql_fetch_assoc($result)) {
		$posts[] = $post;
	}
	return $posts;
}


	function getLikes_beauty(){
	$sql = 'SELECT * FROM post_likes WHERE category="beauty"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_beauty(){
	$sql = 'SELECT * FROM post_views WHERE category="beauty"';
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}

	function getLikes_sport(){
	$sql = 'SELECT * FROM post_likes WHERE category="sport"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_sport(){
	$sql = 'SELECT * FROM post_views WHERE category="sport"';
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}

	function getLikes_animals(){
	$sql = 'SELECT * FROM post_likes WHERE category="animals"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_animals(){
	$sql = 'SELECT * FROM post_views WHERE category="animals"';
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}

	function getLikes_formoms(){
	$sql = 'SELECT * FROM post_likes WHERE category="formoms"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_health(){
	$sql = 'SELECT * FROM post_views WHERE category="health"';
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}

	function getLikes_health(){
	$sql = 'SELECT * FROM post_likes WHERE category="health"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_formoms(){
	$sql = 'SELECT * FROM post_views WHERE category="formoms"';
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}

	function getLikes_music(){
	$sql = 'SELECT * FROM post_likes WHERE category="music"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_music(){
	$sql = 'SELECT * FROM post_views WHERE category="music"';
	$result = mysql_query($sql);
	$views = array();
	while($view = mysql_fetch_assoc($result)) {
		$views[] = $view;
	}
	return $views;
}
	function getLikes_psychologies(){
	$sql = 'SELECT * FROM post_likes WHERE category="psychologies"';
	$result = mysql_query($sql);
	$likes = array();
	while($like = mysql_fetch_assoc($result)) {
		$likes[] = $like;
	}
	return $likes;
}

	function getViews_psychologies(){
	$sql = 'SELECT * FROM post_views WHERE category="psychologies"';
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
  $num_rows = mysql_num_rows( $result );
	return $num_rows;
}



?>