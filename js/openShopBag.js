function openShopBag (){
    console.log('test');
    document.getElementById('exampleModalLong').style.display = 'block';
}

var cart = {}; //моя корзина
function addToCart() {
    //добавляем товар в корзину
    var articul = $(this).attr('data-art');
    console.log(articul);
    if (cart[articul]!=undefined) {
        cart[articul]++;
    } else {
        cart[articul] = 1;
    }
    localStorage.setItem('cart', JSON.stringify(cart) );
    console.log(cart);
}