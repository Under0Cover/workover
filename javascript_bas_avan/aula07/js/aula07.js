var pessoa = {
    idade: 25,
    nome: 'Tales',
    sobrenome: 'Oliver',
    altura: 1.75,
    peso: 99.5,
    casado: false,
    aniversario: function () {
        pessoa.idade++;
    },
    nomeCompleto: function() {
        var nomeCompleto = pessoa.nome +' '+pessoa.sobrenome;
        return nomeCompleto;
    }
};

pessoa.aniversario();
console.log(pessoa);
console.log('A idade da pessoa, aumentou em 1 ano. E agora é: ',pessoa.idade);
console.log(pessoa.nomeCompleto());
console.log('O nome completo da pessoa é formado pela composição do nome:',pessoa.nome+ ' o sobrenome da pessoa:',pessoa.sobrenome+ '. Ficando por completo como:',pessoa.nomeCompleto());
console.log(pessoa);