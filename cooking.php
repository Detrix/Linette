<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Linete</title>
        <link href="style/style.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption|Neucha|Russo+One|Scada|Lobster|Pattaya|Bad+Script|Pacific" rel="stylesheet">
       
</head>
<body>
    <?php
        require("header.php");
        require("script/stat.php");
        require ("script/connect.php"); 
    ?>
    <!-- <div id="container"> -->
        <div id="wrapper">
            <div id="cookingPage">
                <div class="pageName">
                    <h2>Кулинария</h2>
                </div>
                <div class="cookingTopButtons">
                    <div class="cookingList">
                        <p>Салаты</p>
                    </div>
                    <div class="cookingList">
                       <p>Закуски</p>
                    </div>
                    <div class="cookingList">
                        <p>Первые блюда</p>
                    </div>
                    <div class="cookingList">
                        <p>Вторые блюда</p>
                    </div>
                    <div class="cookingList">
                        <p>Десерты</p>
                    </div>
                </div>
                <div class="sideBar">
                    <div class="sideBar__title">
                        <h1></h1>
                    </div>
                    <div class="sideBar__list">
                        <div class="sideBar__listItem">
                            <ul>
                             <!--js выводит навания рецептов из бд-->
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="mainRecipe">
                    <div class="mainRecipe__title"></div>
                    <div class="mainRecipe__img"></div>
                    <div class="mainRecipe__text"></div>
                    <div class="mainRecipe__comment"><span>Удалось ли Вам блюдо? Напишите коментарий :)</span>
                        <div class="mainRecipe__commentBlock"></div>
                        <form class="mainRecipe__commentFrom" action="sendMessage.php" method="post">
                            <p>Автор:<br> 
                                <input type="text" id="author" value="Гость">
                            </p>
                            <p>Текст сообщения:<br>
                                <textarea style="resize: none;" rows="5" cols="50" id="message" maxlength="200"></textarea>
                            </p>
                            <p id="recipie_id"></p>
                            <p>
                                <input type="button" value="Отправить" id="send"> 
                                <span id="resp"></span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    <!-- </div> -->
    <?php
        require("footer.php");
    ?>
  
    <script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="script/js.js"></script>
</body>
</html>