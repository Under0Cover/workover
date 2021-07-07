// return com arrays
function arr() {
    return [1,2,3,4,5,6,7,8,9,10];
}

console.log(arr()[0]);
console.log(arr()[1]);
console.log(arr()[2]);
console.log(arr()[3]);
console.log(arr()[4]);
console.log(arr()[5]);
console.log(arr()[6]);
console.log(arr()[7]);
console.log(arr()[8]);
console.log(arr()[9]);

function calculo () {
    var soma = arr()[9] + arr()[0];
    return soma;
}

console.log('--------------');
console.log(calculo());
console.log('--------------');

// return com objetos

function objeto() {
    return {
        peso: 90,
        idade: 30,
        nome: 'Júlio',
        casado: false
    }
}

console.log(objeto().nome);
console.log(objeto().peso);
console.log(objeto().idade);
console.log(objeto().casado);   