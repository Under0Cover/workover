/* JavaScript é case sensitive */

var Variavel = 20;
var variavel = 10;

console.log('Essa é a Variavel com o "V" maiúsculo ', Variavel);
console.log('Essa é a variavel com o "V" minúsculo ', variavel);

/* O case sensitive também é válido para funções */

function Funcao() {
    return Variavel !== variavel;
}

console.log('Print da Funcao: ', Funcao());

function funcao() {
    return Variavel == variavel;
}

console.log('Print da funcao: ',funcao());

/*  O JavaScript também é case sensitive para strings */

var exemplo = "Animal";
var Exemplo = "animal";

function comparar() {
    return exemplo !== Exemplo;
}

console.log('Print da Função comparar: ',comparar());

