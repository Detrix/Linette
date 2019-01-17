$(document).ready(function(){

	var recipies;
  $("#load").click(function(){
    $.ajax({
    	url: "script/recipies_from_bd.php",
    	method: "POST"
		  }).done(function(data){
				recipies = JSON.parse(data);
				var i=0;
				for(i; i<recipies.length; i++){
					alert ( recipies[i].id + "\n" + recipies[i].title );
				}
		  }
	  )

		  //Добавим первый рецепт
		  var i=0;
		  for(i; i<recipies.length; i++){
		  	alert ( recipies[i].id + "n" + recipies[i].title );
		  }

  });



});



// var cart = JSON.parse ( jsonString );
 
// alert ( cart.shopperEmail );
// alert ( cart.contents[1].productName );

