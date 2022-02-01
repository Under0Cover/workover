// Variáveis 
var vaiMudar = false;
var contador;
var valor;
var historico = Array();
var memoria = Array();
var fe = false;
var hyp = false;
var deg = "deg";

// Funções
$(document).on('click', '.col', function(){
    $(this).css('background-color', 'rgb(192,192,192)');
    valor = $('#valor').text();
    valor = valor.replace(',','.');
    setTimeout(function(){
        $('.col').css('background-color', 'rgb(240,240,240');
        $('.numeros').css('background-color', 'rgb(250,250,250');
    }, 100);
});



$(document).on('click', '.numeros', function(){
    
});