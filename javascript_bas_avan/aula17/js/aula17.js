var arr = ['Julio', 'Cesar', 'Moreira', 1.75, 99.8, 37];

function adicionarString() {
    arr.push('String adicionada');
    return arr;
}

console.log(adicionarString());

function adicionarNumero() {
    console.log(arr.length);
    arr.push((arr.length * 2));
    return arr;
}

console.log(adicionarNumero());

function adicionarTrue() {
    arr.push(true);
    return arr;
}

console.log(adicionarTrue());

// For
for (var numero = 0; numero < 3; numero++) {
    arr.push(numero);
    console.log(arr);
}