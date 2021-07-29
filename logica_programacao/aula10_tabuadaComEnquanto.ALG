Algoritmo "tabuadaComEnquanto"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplo de Algoritmo de Tabuada com Enquanto Faça
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Seção de Declarações das variáveis 
contador: inteiro
tabuada: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("Programa de Tabuada")
escreval("Digite o valor a ser calculado:")
leia(tabuada)
escreval("------------------------------")

contador <- 1
enquanto contador <= 10 faca
escreval(tabuada, " multiplicado por ", contador, " é:", (tabuada * contador))
contador <- contador + 1
fimenquanto
Fimalgoritmo