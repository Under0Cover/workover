function calcular(){
    let valor1 = document.getElementById("valor1").value;
    let valor2 = document.getElementById("valor2").value;
    let sinal = document.getElementById("sinal").value;
    let resultado = document.getElementById("resultado");

    /*
    console.log(valor1);
    console.log(valor2);
    console.log(sinal);
    console.log(resultado);
    */

    /*
        Vou fazer o tratamento de erro antes de implemntar o código da Calculadora
    */

    let valor1tratado = parseFloat(valor1);
    let valor2tratado = parseFloat(valor2);

    if (!isNaN(valor1tratado)) {
        if (!isNaN(valor2tratado)) {
            if (sinal == '+') {
                resultado.value = valor1tratado + valor2tratado;
            } else if (sinal == '-') {
                resultado.value = valor1tratado - valor2tratado;
            } else if (sinal == '*'){
                resultado.value = valor1tratado * valor2tratado;
            } else {
                resultado.value = valor1tratado / valor2tratado;
            }
        } else {
            alert("Verifique o segundo valor informado.")
        }
    } else {
        alert("Verifique o primeiro valor informado.")
    }
    
}