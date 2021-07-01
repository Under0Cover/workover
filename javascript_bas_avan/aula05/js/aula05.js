var x = 10;
var y = 20;

function teste() {
    if (x == 5) {
        y = 30;
        console.log('O valor de x é: ', x);
        console.log('O valor de y é: ', y);
    } else if (x < 5) {
        y = 3;
        console.log('O valor de x é menor que 5.');
        console.log('O valor de x é:',x);
        console.log('O valor de y é:',y);
    } else {
        y = 30;
        console.log('O valor de x é maior que 5.');
        console.log('O valor de x é:',x);
        console.log('O valor de y é:',y);
    }
}

teste();