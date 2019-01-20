<?php include("connect.php");
header("Content-type: text/html; charset=UTF-8");

//**********************************************

		$loise = 1;
		$recipie_id = $_POST['recipie_id'];
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ip = $_SERVER['HTTP_CLIENT_IP']; }
		$date = date("d-m-Y");
		$r = mysql_query("INSERT INTO likes (ip, loise, date, recipie_id) VALUES ('$ip', '$loise', '$date', '$recipie_id')");
		if ($r == true) {
			echo 0;
		}
			


?>     	