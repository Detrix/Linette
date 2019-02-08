<?php 

		$postID = $post_id;
		$categoryID = $table;
		$ip = "";
		if (!empty($_SERVER['REMOTE_ADDR'])) { $ip = $_SERVER['REMOTE_ADDR']; }
		$date = date("d-m-Y");
		$flag = false;
		$query = mysql_query('SELECT * FROM `post_views`');
		while($row = mysql_fetch_assoc($query)) {
			if ($row['ip'] == $ip && $row['post_id'] == $postID && $row['date'] == $date && $row['category'] == $categoryID){
				$flag = true;
				break;
			}
		}

		if($flag==true){
		} else {
			$r = mysql_query("INSERT INTO post_views (ip, date, post_id, category) VALUES ('$ip', '$date', '$postID', '$categoryID')");
		}

		

?>     	