var x = 5;
var y = 10;

function usandoOrUm() {
    return x > 10 || y > 10;
}

console.log('Primeira função do OR: ',usandoOrUm());

function usandoOrDois() {
    return x < 10 || y > 10;
}

console.log('Segunda função do OR: ',usandoOrDois());

function usandoAndUm() {
    return x < 30 && y > 10;
}

console.log('Primeira função do AND: ',usandoAndUm());

function usandoAndDois() {
    return x < 30 && y > 5;
}

console.log('Segunda função do AND: ',usandoAndDois());

function usandoNotUm() {
    return ! x > 10;
}

console.log('Primeira função do NOT: ',usandoNotUm());

function usandoNotDois() {
    return ! x < 10;
}

console.log('Segunda função do NOT: ',usandoNotDois());