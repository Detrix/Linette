    <?php
        require("header.php");
        require ("script/connect.php"); 
        require ("script/functions.php"); 
        require("script/stat.php");
    ?>
        <div id="wrapper">
            <div id="mainPage">
							<?php
								$page = "health";
								$posts = getPosts($page);
                $likes = getLikes($page);
                $views = getViews($page);
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
