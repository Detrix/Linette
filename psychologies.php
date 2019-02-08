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
    <title>Linette - секреты психологии | интересные факты психологии</title>
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
    ?>
        <div id="wrapper">
            <div id="mainPage">
							<?php
								$page = "psychologies";
								$posts = getPosts($page);
								$likes = getLikes_psychologies();
								$views = getViews_psychologies();
							?>
							<?php foreach($posts as $post){ ?>
            	<div class="mainPage__wrapper_content">
            	    <div class="mainPage__wrapper_card_post">
            	        <div class="mainPage__wrapper_post">
            	            <div class="mainPage__post_image">
            	               <a href="post.php?post_id=<?=$post['id'];?>&category=<?=$post['type'];?>">
            	                <img src="<?= $post['img'];?>" alt="<?= $post['title'];?>">
            	                <span><h2><?= $post['title'];?></h2></span>
            	                </a>
            	            </div>
            	            <div class="mainPage__post_discription">
            	                <p><?=mb_substr($post['text'], 0, 128, 'UTF-8').'...';?><a href="post.php?post_id=<?=$post['id'];?>&category=<?=$post['type'];?>">Читать далее -></a></p>
            	            </div>
            	            <div class="mainPage__post_info">
            	            		
            	                <div class="mainPage__post_info_date"><img src="images/date.png" alt="date_icon"><?= $post['date'];?></div>
          	                  <?php 
          	                  	$count_Views = 0;
          	                  	foreach($views as $view){ 
          	                  		if($view['post_id'] == $post['id']){
          	                  			$count_Views++;
          	                  		}
          	                		}
          	                	?>
            	                <div class="mainPage__post_info_views"><img src="images/views.png" alt="view"><?= $count_Views;?></div>
            	                <?php 
            	                	$count_Likes = 0;
            	                	foreach($likes as $like){ 
            	                		if($like['post_id'] == $post['id']){
            	                			$count_Likes++;
            	                		}
            	              		}
            	              	?>
          	                	<div class="mainPage__post_info_likes"><img src="images/like.png" alt="like_icon"><?= $count_Likes;?></div>
            	            </div>
            	            
            	        </div>
            	    </div> 
            	</div>
            	<?php } ?>
            </div>
        </div>
    <?php
        require("footer.php");
    ?>

    <script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="script/js.js"></script>

</body>
</html>