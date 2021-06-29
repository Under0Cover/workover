var x = 5;

function subtraindo() {
    return --x;
}

console.log(subtraindo());

function somando() {
    return ++x;
}

console.log(somando());

var y = '5' + '5';

function concatenando() {
    return y;
}

console.log(concatenando());

z = +'5';
w = +'10';

function somaString() {
    return z + w;
}

console.log(somaString());