Algoritmo "vetores"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Exemplos de Vetores
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Se��o de Declara��es das vari�veis 
numeros: vetor[1..5] de inteiro
indice: inteiro
nomes: vetor[1..4] de caracter

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
//escreval("Digite um valor para a posi��o 1 do vetor:")
//leia(numeros[1])

para indice de 1 ate 5 faca
escreval("Digite um valor para a posi��o ",indice," do vetor:")
leia(numeros[indice])
fimpara

escreval("-----------------------------------------")
indice <- 1
para indice de 1 ate 4 faca
escreval("Digite um nome para a posi��o ",indice," do vetor:")
leia(nomes[indice])
fimpara

escreval("-----------------------------------------")
indice <- 1
escreval("Resultado dos n�meros")
para indice de 1 ate 5 faca
escreval(numeros[indice])
fimpara

escreval("-----------------------------------------")
indice <- 1
escreval("Resultado dos nomes")
para indice de 1 ate 4 faca
escreval(nomes[indice])
fimpara

Fimalgoritmo