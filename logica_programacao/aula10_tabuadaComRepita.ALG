Algoritmo "tabuadaComRepita"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplo de Algoritmo de Tabuada com Repita
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Seção de Declarações das variáveis 
contador: inteiro
tabuada: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("Programa de Tabuada")
escreval("Digite o número a ser calculado:")
leia(tabuada)

escreval("-------------------------")

contador <- 1
repita
escreval(tabuada, " multiplicado por", contador, " é", (contador * tabuada))
contador <- contador + 1
ate contador > 10

Fimalgoritmo