<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133659571-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133659571-1');
    </script>

    <meta charset="UTF-8">
    <title>Linette - вкусные и простые рецепты | готовить вкусно - просто</title>
        <link href="style/style.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption|Neucha|Russo+One|Scada|Lobster|Pattaya|Bad+Script|Pacific" rel="stylesheet">
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       <script>
         (adsbygoogle = window.adsbygoogle || []).push({
           google_ad_client: "ca-pub-6318439533658792",
           enable_page_level_ads: true
         });
       </script>
</head>
<body>
    <?php
        require("header.php");
        require ("script/connect.php"); 
        require("script/stat.php");
    ?>
    <!-- <div id="container"> -->
        <div id="wrapper">
            <div id="cookingPage">
                <div class="pageName">
                    <h2>Вкусные рецепты</h2>
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
                            <ul class="rounded">
                             <!--js выводит навания рецептов из бд-->
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="mainRecipe">
                    <div class="mainRecipe__like"><span>Like Me-></span><img id="recipieLike" src="images/like.png" alt="like"><label id="likeField" for="like">555</label><div id="likeStatus">555</div></div>
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
                                <textarea style="resize: none;" rows="5" cols="50" id="message" maxlength="500"></textarea>
                            </p>
                            <p id="recipie_id"></p>
                            <p>
                                <input type="button" value="Отправить" id="send" max="50"> 
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