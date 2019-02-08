<?php include("connect.php");

//**********************************************

		$postID = $_POST['postID'];
		$categoryID = $_POST['categoryID'];
		$ip = "";
		if (!empty($_SERVER['REMOTE_ADDR'])) { $ip = $_SERVER['REMOTE_ADDR']; }
		$date = date("d-m-Y");
		$flag = false;
		$query = mysql_query('SELECT * FROM `post_likes`');
		while($row = mysql_fetch_assoc($query)) {
			if ($row['ip'] == $ip && $row['post_id'] == $postID && $row['date'] == $date && $row['category'] == $categoryID){
				$flag = true;
				break;
			}
		}

		if($flag==true){
			echo 1;
		} else {
			$r = mysql_query("INSERT INTO post_likes (ip, date, post_id, category) VALUES ('$ip', '$date', '$postID', '$categoryID')");
			if ($r == true) {
				echo 0;
			}
		}

		
			


?>     	