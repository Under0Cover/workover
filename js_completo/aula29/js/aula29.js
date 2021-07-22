var button = $('button');
var mensagem = $('.mensagem');

button.on('click', function(){
    mensagem.delay('slow').fadeOut();
})