Algoritmo "tabuadaComEnquanto"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Exemplo de Algoritmo de Tabuada com Enquanto Fa�a
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Se��o de Declara��es das vari�veis 
contador: inteiro
tabuada: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
escreval("Programa de Tabuada")
escreval("Digite o valor a ser calculado:")
leia(tabuada)
escreval("------------------------------")

contador <- 1
enquanto contador <= 10 faca
escreval(tabuada, " multiplicado por ", contador, " �:", (tabuada * contador))
contador <- contador + 1
fimenquanto
Fimalgoritmo