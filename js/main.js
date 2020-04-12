let cart = {}; // корзина

function init() {
    //вычитуем файл goods.json
    $.getJSON("goods.json", goodsOut);
}

function goodsOut(data) {

    for (let key in data) {

       const out =`<center><img src="images/${data[key].img}" alt=""></center>`;

       $('#'+key+'>ul').append(out);

    }

    $('.bnt_paypal').on('click', addToCart);
}



//добавляем товар в корзину
function addToCart() {

    cart  = {};

    const id = $(this).attr('data-id');
  
      if (cart[id] === undefined)
      cart[id] = 1;//если нет то делаем равынм 1
   

    saveCart();//сохраняем в корзине
}


//сохранить корзину
function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку 
}


$(document).ready(function ()  {
    init();
});

