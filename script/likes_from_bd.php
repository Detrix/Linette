<?php 	
	require 'connect.php'; 
	$u = mysql_query('SELECT * FROM `likes`');
	$likes = array();
	while($like = mysql_fetch_assoc($u)) {
		$likes[] = $like;
	}
	echo json_encode($likes, JSON_UNESCAPED_UNICODE);
?>