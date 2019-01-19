$(document).ready(function(){

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

				$('.sideBar__title h1').html("Салаты");

				for(var i=0; i<recipies.length; i++){

					if (recipies[i].type == "Салаты") {
						$('.sideBar__listItem ul').append('<li>'+recipies[i].title+'</li>');
					}
				}
		  })


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
		  	$('.mainRecipe__title').html(recipies[t].title);
		  	$('.mainRecipe__img').css('background-image', 'url(' + recipies[t].img + ')');
		  	$('.mainRecipe__text').html(recipies[t].text);
		  	
		  	$('.sideBar__title h1').html(chosenButtonName);
		  	for(var i=0; i<recipies.length; i++){
		  		if (recipies[i].type == chosenButtonName) {
		  			$('.sideBar__listItem ul').append('<li>'+recipies[i].title+'</li>');
		  		}
		  	}
		  }

		  //выбор рецепта
  function chooseRecipie(event){
  	var chosenRecipie = $(event.target).text();
  	for(var i=0; i<recipies.length; i++){
  		if (recipies[i].title == chosenRecipie) {
  			$('.mainRecipe__title').html(recipies[i].title);
				$('.mainRecipe__img').css('background-image', 'url(' + recipies[i].img + ')');
				$('.mainRecipe__text').html(recipies[i].text);
				break;
  		}
 		}
	}

	
	$('.sideBar__listItem').bind('click', 'li', chooseRecipie); 
	    


	$('.cookingList').bind('click', 'p', chooseType);



});

