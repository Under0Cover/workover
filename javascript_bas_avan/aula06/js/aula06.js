var pessoa = {
    idade: 25,
    nome: 'Oliver',
    altura: 1.75,
    peso: 99.5,
    casado: false
};

function apresentarObjeto() {
    if (pessoa.idade < 18) {
        console.log('A pessoa tem menos de 18 anos de idade.');
    } else {
        console.log('A pessoa tem mais de 18 anos de idade.');
    }
    console.log('O nome da pessoa é: ' +pessoa.nome+ '. A idade é: ' +pessoa.idade+ ' anos.');
    var imc = (pessoa.peso / (pessoa.altura * pessoa.altura));
    console.log('O IMC de '+pessoa.nome+ ' é: '+imc);
    if (imc < 18.5) {
        console.log('O  índice do IMC é abaixo do peso.')
    } else if ( imc < 24.9) {
        console.log('Parabéns! O índice do IMC está na faixa correta!');
    } else if (imc < 29.9) {
        console.log('O índice do IMC informa que a pessoa está levemente acima do peso.');
    } else if (imc < 34.9) {
        console.log('O índice do IMC informa que a pessoa está com obesidade de grau 1. Vigilância!');
    } else if (imc < 39.9) {
        console.log('O índice do IMC informa que a pessoa está com obesidade de grau 2 (Obesidade Severa)! Cuidado!');
    } else {
        console.log('O índice do IMC informa que a pessoa está com obesidade de grau 3 (Obesidade Mórbida). Atenção!')
    }
}

apresentarObjeto();
console.log(pessoa);