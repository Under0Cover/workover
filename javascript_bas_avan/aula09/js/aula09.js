var carro =  {
    portas: 4,
    marca: 'Fiat',
    ano: 2020,
    cambio: 'Manual',
    modelo: '',
    abastecimento: ''
}

function naoTernario() {
    if (carro.portas == 4) {
        carro.modelo = 'Modelo 4 portas';
    } else {
        carro.modelo = 'Modelo 2 portas';
    }
    console.log(carro.modelo);
}

naoTernario();

var ternario = carro.cambio == 'Manual' ? carro.abastecimento = 'Gasolina' : carro.abastecimento = 'Diesel';
console.log(ternario);