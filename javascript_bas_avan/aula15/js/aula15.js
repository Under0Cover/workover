var divisao = 5 / 2; // Divisão -> (/) Exibe o resultado da divisão
var divisao2 = 5 % 2; // Módulo -> (%) Exibe o resto da divisão

console.log(divisao);
console.log(divisao2);

var numero = 0;
while(numero <= 150) {
    if (numero % 2 === 0) {
        console.log('O ' +numero+ ' é par.');
    } else {
        console.log('O ' +numero+ ' é impar.');
    }
    numero++;
} 