<?php
  Header("HTTP/1.1 404 Not Found");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	    <meta charset="UTF-8">
    <title>Linette - Страница не найдена</title>
    <link href="style/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption|Neucha|Russo+One|Scada|Lobster|Amatic+SC|Bad+Script|Pacific" rel="stylesheet">
</head>
<body>
    <?php
        require("header.php");
        require ("script/connect.php"); 
        require ("script/functions.php"); 
        require("script/stat.php");
    ?>
        <div id="wrapper">
          <div class="post_wrapper">
            
            <div class="post__singlePost_title">
              <div></div>
              <div>
                <h1>Error 404: Страница не найдена</h1>
                <div class="backButton" onclick="pageBack()">
                  <p>Назад</p>
                </div>
                </div>
                <div></div>
            </div>

        </div>
        </div>

    <?php
        require("footer.php");
    ?>
    <script>function pageBack() {history.back();}</script>
    <script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="script/js.js"></script>

</body>
</html>