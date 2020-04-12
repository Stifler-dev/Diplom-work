let cart  = {};

//проверяем есть ли localStorage запись cart 
function loadCart() {

    if(localStorage.getItem('cart')) { //если есть 
   
        cart = JSON.parse(localStorage.getItem('cart'));//расшифровываю и записываю переманную cart
      
       showCart();

    } else{
    	$('.main-cart').html('корзина пуста');
    }

}


function showCart() {
   $.getJSON('goods.json', function (data) {

     const goods =data;
     let out ='';

     for (let id in cart) {
      out += `<img src="images\\${goods[id].img}">`;
      out += `${goods[id].cost}`
     //out +=` ${goods[id].name }`;
     // out +=` ${cart[id]  }`;
      out += '<br>';
     }

     $('.main-cart').html(out);

   });
}

$(document).ready(function() {
	loadCart();
})



