<?php 	
	require 'connect.php'; 
	$q= mysql_query('SELECT * FROM `messages`');
	$messages = array();
	while($message = mysql_fetch_assoc($q)) {
		$messages[] = $message;
	}
	echo json_encode($messages, JSON_UNESCAPED_UNICODE);
?>