<?php 	
	require 'connect.php'; 
	$query = mysql_query('SELECT * FROM `recipies`');
	$rows = array();
	while($row = mysql_fetch_assoc($query)) {
		$rows[] = $row;
	}
	echo json_encode($rows, JSON_UNESCAPED_UNICODE);
?>