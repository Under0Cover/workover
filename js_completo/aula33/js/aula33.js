var link = $('.menu li a');
var subir = $('.btn');

link.on('click', function(){
    var seletor = $(this).attr('href');
    var posicao = $(seletor).offset().top;
    $('html, body').animate({scrollTop: posicao - 60}, 1500);
})

subir.on('click', function(){
    $('html, body').animate({scrollTop: 0}, 500);
})

$(window).scroll(function(){
    var minhaposicao = $(this).scrollTop();
    if (minhaposicao >= 100) {
        subir.fadeIn();
    } else {
        subir.fadeOut();
    }
})