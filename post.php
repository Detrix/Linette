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
    <title>Linette - секреты красоты | женские хитрости крастоты</title>
        <link href="style/style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption|Neucha|Russo+One|Scada|Lobster|Amatic+SC|Bad+Script|Pacific" rel="stylesheet">
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
        require ("script/functions.php"); 
        require("script/stat.php");
        

        $post_id = $_GET['post_id'];
        $table = "";
        switch ($_GET['category']) {
            case 'beauty':
                $table = 'beauty';
                break;
            case 'sport':
                $table = 'sport';
                break;
            case 'animals':
                $table = 'animals';
                break;
            case 'formoms':
                $table = 'formoms';
                break;
            case 'health':
                $table = 'health';
                break;
            case 'music':
                $table = 'music';
                break;
            case 'psychologies':
                $table = 'psychologies';
                break;
            
            
            default:
                echo "<script>history.back();</script>";
                break;
        }

        if(!is_numeric($post_id)) echo "<script>window.location = '$table.php'</script>";

        $post = getPostById($post_id,$table);

        $next = 1;
        $prev = 1;

        if(($post['id']-1)<=0){
            $prev = 0;
            $next = 1;
        } else if(($post['id']+1)>getPostsCounts($table)){
            $next = 0;
            $prev = 1;
        } 
        require("script/post_view_pluse.php"); //добавляем просмотры поста
    ?>
        <div id="wrapper">
            <div class="post_wrapper">

                <div class="post__singlePost_title">
                    <div class="post__singlePost_title__prev"><a href="post.php?post_id=<?=$post['id']-$prev;?>&category=<?=$post['type'];?>"></a></div>
                    <h1><?= $post['title'];?></h1>
                    <div class="post__singlePost_title__next"><a href="post.php?post_id=<?=$post['id']+$next;?>&category=<?=$post['type'];?>"></a></div>
                </div>
                <div id="postID"><?=$post['id'];?></div>
                <div id="categoryID"><?=$table;?></div>
                <div class="post__singlePost_content">
                    <div class="post__singlePost_info">
                        <div class="post__singlePost_info_date">
                            <img src="images/date.png" alt="date_icon">
                            <label id="PostDateField"><?= $post['date'];?></label>

                        </div>
                        <div class="post__singlePost_info_views">
                            <img src="images/views.png" alt="view icon">
                            <label id="PostViewsField"></label>
                        </div>
                        <div class="post__singlePost_info_likes">
                            <img id="postLike" src="images/like.png" alt="like icon">
                            <label id="PostLikeField"></label> 
                            <div id="PostLikeStatus"></div>
                        </div>
                       
                        
                    </div>
                    <?= $post['text'];?>
                    <div class="post__singlePost_image"><img src="<?= $post['img'];?>" alt="<?= $post['title'];?>"></div>
                </div>
                
                <div class="post__singlePost_navButtons">
                    <div class="post__singlePost_singleNavButton"><a href="post.php?post_id=<?=$post['id']-$prev;?>&category=<?=$post['type'];?>">Предыдущая</a></div>
                    <div class="post__singlePost_singleNavButton"><a href="<?=$post['type'];?>.php">Назад к списку</a></div>
                    <div class="post__singlePost_singleNavButton"><a href="post.php?post_id=<?=$post['id']+$next;?>&category=<?=$post['type'];?>">Следующая</a></div>
                </div>
            </div>
        </div>
    <?php
        require("footer.php");
    ?>

    <script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="script/js.js"></script>

</body>
</html>