var arr = ['Julio', 'Cesar', 'Moreira', {
    idade: 29}
];

var tamanho = arr.length;

console.log('Essa é a quantidade de itens do Array:',tamanho);

while(tamanho > 0) {
    console.log(arr[--tamanho])
}