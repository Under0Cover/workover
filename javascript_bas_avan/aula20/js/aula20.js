var nome = 'Julio';
document.write(`<h1>${typeof nome}</h1>`);;

var numero = 500;
document.write(`<h1>${typeof numero}</h1>`);

var booleano = true;
document.write(`<h1>${typeof booleano}</h1>`);

var arr = [];
document.write(`<h1>${typeof arr}</h1>`);

var objeto = {};
document.write(`<h1>${typeof objeto}</h1>`);

function somar(numero1, numero2) {
    if (typeof numero1 === 'number' && typeof numero2 === 'number') {
        resultado = numero1 + numero2;
        document.write(`<h1>O resultado da soma é: ${resultado}</h1>`);
    } else {
        document.write(`<h1>Os valores fornecidos não são númericos!</h1>`)
    }
}

somar(20, 30);
somar(15, 'Julio');