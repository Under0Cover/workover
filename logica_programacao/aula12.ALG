Algoritmo "matrizes"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Exemplos de Matrizes
// Autor(a)    : Tales Oliver
// Data atual  : 30/07/2021
Var
// Se��o de Declara��es das vari�veis 
matriz: vetor[1..3, 1..2] de inteiro
linha: inteiro
coluna: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
para linha de 1 ate 3 faca
  para coluna de 1 ate 2 faca
    escreval("Digite um valor para a posi��o [",linha, ",", coluna, " ]:")
    leia(matriz[linha,coluna])
  fimpara
fimpara
escreval("--------------------------------")
para linha de 1 ate 3 faca
  para coluna de 1 ate 2 faca
    escreva(matriz[linha,coluna])
  fimpara
  escreval
fimpara

Fimalgoritmo