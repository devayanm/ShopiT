var increaseBtn = document.getElementsByClassName('btn-increase');
var decreaseBtn = document.getElementsByClassName('btn-decrease');
var itemsToBuy = document.getElementById('num_of_items');

function increaseValueBtn(){
    var numero = Number(itemsToBuy.value)+1;
    itemsToBuy.value = numero;
}
function decreaseValueBtn(){
    var numero = Number(itemsToBuy.value)-1;
    numero = numero < 0 ? 0 : numero;
    itemsToBuy.value = numero;
}

var carousel = new bootstrap.Carousel(document.getElementById('landingCarousel'), {
    interval: 1000,
    pause: 'hover'
});
