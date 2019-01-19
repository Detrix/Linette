<?php include("connect.php");
header("Content-type: text/html; charset=UTF-8");

//**********************************************
	if($_POST['message'] != '' && $_POST['author'] != ''){

		$author = $_POST['author'];
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);
		$author = mysql_real_escape_string($author);
		
		$message = $_POST['message'];
		$message = addslashes($message);
		$message = htmlspecialchars($message);
		$message = stripslashes($message);
		$message = mysql_real_escape_string($message);

		$recipie_id = $_POST['recipie_id'];

		$date = date("d-m-Y в H:i:s");
		$result = mysql_query("INSERT INTO messages (author, message, date, recipie_id) VALUES ('$author', '$message', '$date', '$recipie_id')");
		if($result == true){
			echo 0; //Ваше сообшение успешно отправлено
		}else{
			echo 1; //Сообщение не отправлено. Ошибка базы данных
		}
	}else{
		echo 2; //Нельзя отправлять пустые сообщения
	}


?>     	