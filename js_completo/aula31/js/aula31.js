var form = $('form');
var resultado = $('.resultado');

form.on('submit', function(evento){
    evento.preventDefault();

    var dados = $(this).serialize();
    //var dados = $(this).serializeArray();

    resultado.text(dados);
})