Algoritmo "matrizes"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplos de Matrizes
// Autor(a)    : Tales Oliver
// Data atual  : 30/07/2021
Var
// Seção de Declarações das variáveis 
matriz: vetor[1..3, 1..2] de inteiro
linha: inteiro
coluna: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
para linha de 1 ate 3 faca
  para coluna de 1 ate 2 faca
    escreval("Digite um valor para a posição [",linha, ",", coluna, " ]:")
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