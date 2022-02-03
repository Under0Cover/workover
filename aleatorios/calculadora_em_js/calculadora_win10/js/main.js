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

// Função para pegar os números com os cliques
$(document).on('click', '.numeros', function(){
    valor = $('#valor').text();
    valor = valor.replace(',','.');
    if (valor.length < 15) {
        clicando = $('#valor').text();
        if (clicando == "0" || vaiMudar == true) {
            clicando = $(this).text().trim();
            valor = clicando;
            document.getElementById('valor').innerHTML = valor;
        } else {
            adicionarNumero = clicando + $(this).text().trim().replace('.','.');
            document.getElementById('valor').innerHTML = adicionarNumero;
        }
        vaiMudar = false;
    }
}); 

// Função de Dividir
$(document).on('click', '#dividir', function(){
    valor = $('#valor').text();
    valor2 = valor + " ÷ ";
    document.getElementById('valor2').innerHTML = valor2;
    vaiMudar = true;    
});

// Função de Multiplicar
$(document).on('click', '#multiplicar', function(){
    valor = $('#valor').text();
    valor2 = valor + " X ";
    document.getElementById('valor2').innerHTML = valor2;
    vaiMudar = true;    
});

// Função de Subtrair
$(document).on('click', '#subtrair', function(){
    valor = $('#valor').text();
    valor2 = valor + " - ";
    document.getElementById('valor2').innerHTML = valor2;
    vaiMudar = true;    
});

// Função de Soamr
$(document).on('click', '#somar', function(){
    valor = $('#valor').text();
    valor2 = valor + " + ";
    document.getElementById('valor2').innerHTML = valor2;
    vaiMudar = true;    
});


