Algoritmo "procedimentosEFuncoes"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Exemplos de Procedimentos e Fun��es
// Autor(a)    : Tales Oliver
// Data atual  : 30/07/2021
Var
// Se��o de Declara��es das vari�veis 
numero1: inteiro
numero2: inteiro
resultadoFuncao: inteiro

procedimento soma(a, b:inteiro)
var
inicio
escreval("A soma �: ",a + b)
fimprocedimento

funcao somaFuncao(a, b:inteiro) :inteiro
var
inicio
retorne(a + b)
fimfuncao

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
escreval("Programa para somar dois n�meros inteiros")
escreval("Digite o primeiro valor:")
leia(numero1)
escreval("Digite o segundo valor:")
leia(numero2)
escreval("----------------------------------")
soma(numero1, numero2)

escreval("----------------------------------")
escreval("Soma dos mesmo n�meros feita pela Fun��o")
resultadoFuncao <- somaFuncao(numero1, numero2)
escreval("A soma feita pela fun��o �:", resultadoFuncao)

Fimalgoritmo