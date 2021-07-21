var box = $('.box');
var next = $('#next');
var prev = $('#prev');

next.on('click', function(){
    box.animate({
        left: '800'
    }, 1500);
})

prev.on('click', function(){
    box.animate({
        left: '0'
    }, 1500);
})