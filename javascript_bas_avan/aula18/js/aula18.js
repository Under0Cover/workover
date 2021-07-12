// Função nas propriedades dos métodos
var metodos = {
    propriedades: function funcaoPropriedade(mensagem) {
        return mensagem;
    }
}

console.log(metodos.propriedades('Testando a função!'));

// Função auto executável
(function () {
    console.log(40 + 40);
}());