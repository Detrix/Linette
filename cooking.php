<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Linete</title>
        <link href="style/style.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption|Russo+One|Scada|Lobster|Pattaya" rel="stylesheet">
        
</head>
<body>
    <?php
        require("header.php");
    ?>
    <div id="container">
        <div id="wrapper">
            <div id="cookingPage">
                <div class="pageName">
                    <h2>Кулинария</h2>
                    <div class="cookingList">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Закуски
                        </a>
                    </div>
                    <div class="cookingList">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Салаты
                        </a>
                    </div>
                    <div class="cookingList">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Первые блюда
                        </a>
                    </div>
                    <div class="cookingList">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Вторые блюда
                        </a>
                    </div>
                    <div class="cookingList">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Десерты
                        </a>
                    </div>                    
                </div>
                <div class="sideBar">Список</div>
                <div class="mainRecipe">Рецепт</div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
<?php
    require("footer.php");
?>
</body>
</html>