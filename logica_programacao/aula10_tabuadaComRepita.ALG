Algoritmo "tabuadaComRepita"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Exemplo de Algoritmo de Tabuada com Repita
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Se��o de Declara��es das vari�veis 
contador: inteiro
tabuada: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
escreval("Programa de Tabuada")
escreval("Digite o n�mero a ser calculado:")
leia(tabuada)

escreval("-------------------------")

contador <- 1
repita
escreval(tabuada, " multiplicado por", contador, " �", (contador * tabuada))
contador <- contador + 1
ate contador > 10

Fimalgoritmo