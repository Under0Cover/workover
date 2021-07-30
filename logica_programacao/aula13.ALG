Algoritmo "procedimentosEFuncoes"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplos de Procedimentos e Funções
// Autor(a)    : Tales Oliver
// Data atual  : 30/07/2021
Var
// Seção de Declarações das variáveis 
numero1: inteiro
numero2: inteiro
resultadoFuncao: inteiro

procedimento soma(a, b:inteiro)
var
inicio
escreval("A soma é: ",a + b)
fimprocedimento

funcao somaFuncao(a, b:inteiro) :inteiro
var
inicio
retorne(a + b)
fimfuncao

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("Programa para somar dois números inteiros")
escreval("Digite o primeiro valor:")
leia(numero1)
escreval("Digite o segundo valor:")
leia(numero2)
escreval("----------------------------------")
soma(numero1, numero2)

escreval("----------------------------------")
escreval("Soma dos mesmo números feita pela Função")
resultadoFuncao <- somaFuncao(numero1, numero2)
escreval("A soma feita pela função é:", resultadoFuncao)

Fimalgoritmo