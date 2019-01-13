$(document).ready(function(){


	$.ajax({
      url: "php/recipies_from_bd.php",
      success: function(){
      	alert();
          //echo what the server sent back...
      }
  });
});

// var cart = JSON.parse ( jsonString );
 
// alert ( cart.shopperEmail );
// alert ( cart.contents[1].productName );

