var javascript = document.getElementsByClassName('js');
console.log(javascript);

for (let indice = 0; indice < javascript.length; indice++) {
    let texto = javascript[indice].innerHTML;
    javascript[indice].innerHTML = 'Curso ' +texto+ ' JS';
}

var array = [1,2,3,4]

array.forEach(function(elemento, indice){
    if (elemento === 1) {
        array[indice] = 'A';
    } else if (elemento === 2) {
        array[indice] = 'B';
    } else if (elemento === 3) {
        array[indice] = 'C';
    } else if (elemento === 4) {
        array[indice] = 'D';
    } else {
        array[indice] = 'X';
    }
    console.log(array);
})

var novoArray = array.map(function(elemento, indice){
    if (elemento === 'A') {
        array[indice] = 1;
    } else if (elemento === 'B') {
        array[indice] = 2;
    } else if (elemento === 'C') {
        array[indice] = 3;
    } else if (elemento === 'D') {
        array[indice] = 4;
    } else {
        array[indice] = '0';
    }
    return elemento;
})

console.log('-------------');
console.log(array);
console.log(novoArray);
console.log('-------------');

var indiceWhile = 0;
while (indiceWhile < 5) {
    console.log('Loop While');
    indiceWhile++;
}