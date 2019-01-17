<?php 
	mysql_connect("localhost", "root", "")
	or die("<p>Connection error  " . mysql_error() . "</p>");
	
	 mysql_set_charset("utf8");
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
	mysql_query("SET CHARACTER SET 'utf8'");	 
	 
	mysql_select_db("linette")
	or die("<p>Connection error ". mysql_error() . "</p>"); 
	
	function getIP(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip=$_SERVER['REMOTE_ADDR'];
		}
	return $ip;
}
 ?>