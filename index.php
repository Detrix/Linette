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
    <title>Linette - женский досуг | секреты успешной женщины</title>
        <link href="style/style.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption|Russo+One|Scada" rel="stylesheet">
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       <script>
         (adsbygoogle = window.adsbygoogle || []).push({
           google_ad_client: "ca-pub-6318439533658792",
           enable_page_level_ads: true
         });
       </script> 
       <meta name="google-site-verification" content="m5H0oVN5O1eq2PVg7r6_bA6ovX_noyf-MODYTlWiy2w" />
</head>
<body>
    <?php
    require("header.php");
    require ("script/connect.php"); 
    require("script/stat.php");

    ?>
        <div id="wrapper">
            <div id="main_menu">
                <a id="photo1" href="cooking.php">
                    <div class="block">
                        <h2>Кулинария</h2>
                        <p>Есть люди - которые живут ради еды! И это неудевительно, ведь в мире существует множество изумительных рецептов. Их вы сможете найти в этом разделе.</p>
                    </div>
                </a>
                <a id="photo2" href="music.php">
                    <div class="block">
                        <h2>Музыка</h2>
                        <p>Страшная сила эта музыка! Она собирает стадионы, обьеденяет людей, делает мир ярче</p>
                    </div>
                </a>
                <a id="photo3" href="beauty.php">
                    <div class="block">
                        <h2>Красота</h2>
                        <p>Если некрасива девочка, то в этом виновата природа, если некрасива женщина - в этом виновата она сама.</p>
                    </div>
                </a>
               <a id="photo4" href="formoms.php">
                    <div class="block">
                        <h2>Мамочкам</h2>
                        <p>Быть по-матерински заботливым - значить быть способным на безусловную любовь. Секреты воспитания и не только</p>
                    </div>
                </a>
               <a id="photo5" href="sport.php">
                    <div class="block">
                        <h2>Спорт</h2>
                        <p>В здоровом теле - здоровый дух. Это абсолютно верно, ведь достаточно всего пару минут в день дабы укрепить наше тело.</p>
                    </div>
                </a>
                <a id="photo6" href="animals.php">
                    <div class="block">
                        <h2>Домашние питомцы</h2>
                        <p>Мы в ответе за тех кого приручили, и обязаны хнать все тонкости об уходе за ними.</p>
                    </div>
                </a>
                <a id="photo7" href="psychologies.php">
                    <div class="block">
                        <h2>Психология</h2>
                        <p>Иногда для умиротворения достаточно просто включить любимую музыку и заварить чашку чая. А что нужно Вам?</p>
                    </div>
                </a>
                <a id="photo8" href="health.php">
                    <div class="block">
                        <h2>Здоровье</h2>
                        <p>Здоровье -  дороже золота. И мы обязаны ценить его, ведь здоровый человек -  здоровые мысли.</p>
                    </div>
                </a>

                <!--End Main Menu-->
            </div>

        </div>
        <?php
            require("footer.php");
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/js.js"></script>

</body>
</html>