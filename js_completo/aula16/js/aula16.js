function nomeDaFuncao (valor) {
    return valor;
}

function somar (soma) {
    return ++soma;
}

function calcularMedia (nota1, nota2, nota3, nota4) {
    return ((nota1 + nota2 + nota3 + nota4) / 4);
}

var pessoa = {
    nome: 'Keven Jesus',
    idade: 24,
    profissao: 'Professor',
    cidade: 'São Paulo'
}

function novaPessoa (nome, idade, profissao, cidade ){
    pessoa.nome = nome;
    pessoa.idade = idade;
    pessoa.profissao = profissao;
    pessoa.cidade = cidade;
}

function novaPessoaObjeto (novoObjetoPessoa) {
    if (typeof novoObjetoPessoa == 'object') {
        pessoa = novoObjetoPessoa;
        return true;
    } else {
        return false;
    }
}

function testeParametros() {
    console.log(arguments);
}