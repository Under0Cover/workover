var arr = [5,6,7,8,9,10];

function argumentos(arg) {
    return arg;
}

console.log(argumentos(arr));
console.log(argumentos(arr[0]));
console.log(argumentos(arr[1]));
console.log(argumentos(arr[2]));
console.log(argumentos(arr[3]));
console.log(argumentos(arr[4]));
console.log(argumentos(arr[5]));

console.log('---------------------');

var objeto = {
    peso: 90,
    nome: 'Oliver',
    idade: 37,
    casado: false,
    altura: 1.75
}

function argumentos2(arg2) {
    return arg2;
}

console.log(argumentos2(objeto));
console.log(argumentos(objeto.peso));
console.log(argumentos(objeto.nome));
console.log(argumentos(objeto.idade));
console.log(argumentos(objeto.casado));
console.log(argumentos(objeto.altura));

console.log('---------------------');