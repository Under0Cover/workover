Algoritmo "vetores"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplos de Vetores
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Seção de Declarações das variáveis 
numeros: vetor[1..5] de inteiro
indice: inteiro
nomes: vetor[1..4] de caracter

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
//escreval("Digite um valor para a posição 1 do vetor:")
//leia(numeros[1])

para indice de 1 ate 5 faca
escreval("Digite um valor para a posição ",indice," do vetor:")
leia(numeros[indice])
fimpara

escreval("-----------------------------------------")
indice <- 1
para indice de 1 ate 4 faca
escreval("Digite um nome para a posição ",indice," do vetor:")
leia(nomes[indice])
fimpara

escreval("-----------------------------------------")
indice <- 1
escreval("Resultado dos números")
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