Algoritmo "OperadoresRelacionais"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Exemplos de Operadores Relacionais
// Autor(a)    : Tales Oliver
// Data atual  : 27/07/2021
Var
// Se��o de Declara��es das vari�veis 
   valor1: inteiro
   valor2: inteiro
   resultado: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   escreva("Digite um n�mero:")
   leia(valor1)
   escreva("Digite outro n�mero:")
   leia(valor2)
   //leia(valor1, valor2)
   resultado <- valor1 + valor2
   escreval("O valor da soma dos dois n�meros �:",resultado)
   
   se(resultado > 10) entao
                escreva("O resultado � maior do que 10")
   fimse

Fimalgoritmo