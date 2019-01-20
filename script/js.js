$(document).ready(function(){

	//загрузка рецептов при старте
	var recipies;
    $.ajax({
    	url: "script/recipies_from_bd.php",
    	method: "POST"
		  }).done(function(data){
				recipies = JSON.parse(data);

				$('.sideBar__listItem ul').empty();
				var t=0;
				for(var i=0; i<recipies.length; i++){
					if (recipies[i].type == "Салаты") {
						t=i;
						break;
					}
				}

				$('.mainRecipe__title').html(recipies[t].title);
				$('.mainRecipe__img').css('background-image', 'url(' + recipies[t].img + ')');
				$('.mainRecipe__text').html(recipies[t].text);
				$('#recipie_id').text(recipies[t].id);
				getMessage(recipies[t].id);
				getLikes(recipies[t].id);

				$('.sideBar__title h1').html("Салаты");

				for(var i=0; i<recipies.length; i++){

					if (recipies[i].type == "Салаты") {
						$('.sideBar__listItem ul').append('<li>'+recipies[i].title+'</li>');
					}
				}
		  })

		  //конец загрузка рецептов при старте


		  //Выбор категории
		  function chooseType(event){
		  	$('.sideBar__listItem ul').empty();
		  	var chosenButtonName = $(event.target).text();
		  	chosenButtonName = $.trim(chosenButtonName);
		  	var t=0;
		  	for(var i=0; i<recipies.length; i++){
		  		if (recipies[i].type == chosenButtonName) {
		  			t=i;
		  			break;
		  		}
		  	}
		  	$('#recipie_id').text(recipies[t].id);
		  	$('.mainRecipe__title').html(recipies[t].title);
		  	$('.mainRecipe__img').css('background-image', 'url(' + recipies[t].img + ')');
		  	$('.mainRecipe__text').html(recipies[t].text);
		  	getMessage(recipies[t].id);
		  	getLikes(recipies[t].id);
		  	
		  	$('.sideBar__title h1').html(chosenButtonName);
		  	for(var i=0; i<recipies.length; i++){
		  		if (recipies[i].type == chosenButtonName) {
		  			$('.sideBar__listItem ul').append('<li>'+recipies[i].title+'</li>');
		  		}
		  	}
		  }
		  //Конец выбор категории
		  //выбор рецепта
  function chooseRecipie(event){
  	var chosenRecipie = $(event.target).text();
  	for(var i=0; i<recipies.length; i++){
  		if (recipies[i].title == chosenRecipie) {
  			$('.mainRecipe__title').html(recipies[i].title);
				$('.mainRecipe__img').css('background-image', 'url(' + recipies[i].img + ')');
				$('.mainRecipe__text').html(recipies[i].text);
				$('#recipie_id').text(recipies[i].id);
				getMessage(recipies[i].id);
				getLikes(recipies[i].id);
				break;
  		}
 		}
	}

	$('.sideBar__listItem').bind('click', 'li', chooseRecipie);
	$('.cookingList').bind('click', 'p', chooseType);
	//конец выбор рецепта

	//Отправка комментария
	  $("#send").click(function(){
	      var author = $("#author").val();
	      var recipie_id = $("#recipie_id").text();
	      var message = $("#message").val();
	      $.ajax({
		      type: "POST",
		      url: "script/messages_send.php",
		      data: {"author": author, "recipie_id": recipie_id, "message": message},
		      cache: false,
		      success: function(response){
			      var messageResp = new Array('Ваше сообщение отправлено','Сообщение не отправлено Ошибка базы данных','Нельзя отправлять пустые сообщения');
			      var resultStat = messageResp[Number(response)];
			      if(response == 0){
				      $("#author").val(author);
				      $("#message").val("");
				      getMessage(recipie_id);
			    	}
			      $("#resp").text(resultStat).show().delay(1500).fadeOut(800);
		    	}
	    	});
	      return false;
	  });


	//конец Отправка комментария

	//Вывод комментария

	function getMessage(recipie_id){
		var messages;
	    $.ajax({
	    	url: "script/messages_from_bd.php",
	    	method: "POST"
			  }).done(function(data){
					messages = JSON.parse(data);
				$('.mainRecipe__commentBlock').empty();
				for(var i=0; i<messages.length; i++){
					if (messages[i].recipie_id == recipie_id) {
						$('.mainRecipe__commentBlock').append('<div class="mainRecipe__singleComment"><p class="commentAuthor">'+messages[i].author+'</p><p class="commentDate">'+messages[i].date+'</p><p class="commentMessage"><div class="clear"></div>'+messages[i].message+'</p></div>');
					}
				}


					
			  })
	}

	//Конец Вывод комментария
	//Отправка лайка
	  $("#recipieLike").click(function(){
	      var recipie_id = $("#recipie_id").text();
	      $.ajax({
		      type: "POST",
		      url: "script/like_send.php",
		      data: {"recipie_id": recipie_id},
		      cache: false,
		      success: function(response){
			      if(response == 0){
				      getLikes(recipie_id);
			    	}
		    	}
	    	});
	      return false;
	  });


	//конец Отправка лайка
	//Вывод лайка

	function getLikes(recipie_id){
		var likes;
		var likeCount=0;
	    $.ajax({
	    	url: "script/likes_from_bd.php",
	    	method: "POST"
			  }).done(function(data){
					likes = JSON.parse(data);
				$('#likeField').empty();
				for(var i=0; i<likes.length; i++){
					if (likes[i].recipie_id == recipie_id) {
						likeCount++;
						
					}
				}
				$('#likeField').html(likeCount);

					
			  })
	}

	//Конец Вывод лайка



});

