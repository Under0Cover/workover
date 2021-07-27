Algoritmo "OperadoresRelacionais"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplos de Operadores Relacionais
// Autor(a)    : Tales Oliver
// Data atual  : 27/07/2021
Var
// Seção de Declarações das variáveis 
   valor1: inteiro
   valor2: inteiro
   resultado: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreva("Digite um número:")
   leia(valor1)
   escreva("Digite outro número:")
   leia(valor2)
   //leia(valor1, valor2)
   resultado <- valor1 + valor2
   escreval("O valor da soma dos dois números é:",resultado)
   
   se(resultado > 10) entao
                escreva("O resultado é maior do que 10")
   fimse

Fimalgoritmo