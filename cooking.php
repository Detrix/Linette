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
