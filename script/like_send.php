<?php include("connect.php");

//**********************************************

		$loise = 1;
		$recipie_id = $_POST['recipie_id'];
		if (!empty($_SERVER['REMOTE_ADDR'])) { $ip = $_SERVER['REMOTE_ADDR']; }
		$date = date("d-m-Y");
		$flag = false;
		$query = mysql_query('SELECT * FROM `likes`');
		while($row = mysql_fetch_assoc($query)) {
			if ($row['ip'] == $ip && $row['recipie_id'] == $recipie_id && $row['date'] == $date){
				$flag = true;
				break;
			}
		}

		if($flag==true){
			echo 1;
		} else {
			$r = mysql_query("INSERT INTO likes (ip, loise, date, recipie_id) VALUES ('$ip', '$loise', '$date', '$recipie_id')");
			if ($r == true) {
				echo 0;
			}
		}

		
			


?>     	