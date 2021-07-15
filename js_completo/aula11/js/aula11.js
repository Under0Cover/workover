var carro = {
    indice: 'Valor',
    placa: 'ADD-4423',
    modelo: 'Sedan',
    marca: 'Hyundai',
    opcionais: {
        cambio: 'Manual',
        combustivel: 'Flex',
        ar_condicionado: true,
        "air-bag": true
    }
};

console.log(carro);
console.log(carro.indice);
console.log(carro.placa);
console.log(carro.modelo);
console.log(carro.marca);
console.log(carro.opcionais);
console.log(carro.opcionais.cambio);
console.log(carro.opcionais.combustivel);
console.log(carro.opcionais.ar_condicionado);
console.log(carro.opcionais["air-bag"]);