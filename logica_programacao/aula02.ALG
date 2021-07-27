Algoritmo "OperadoresAritméticos"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Exemplos dos Operadores Aritméticos
// Autor(a)    : Tales Oliver
// Data atual  : 27/07/2021
Var
// Seção de Declarações das variáveis 
   nota1: real
   nota2: real
   nota3: real
   nota4: real
   resultado: real
   // nota1, nota2, nota3, nota4, resultado: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval(7 + 5)
   escreval(7 - 5)
   escreval(7 * 5)
   escreval(35 / 5)
   escreval(8 mod 3)
   escreval(8 % 3)
   escreval(7 ^ 5)
   escreval("---------------------")
   escreval("Cálculo de Média")
   escreval("---------------------")
   leia(nota1)
   leia(nota2)
   leia(nota3)
   leia(nota4)

   escreval("---------------------")
   resultado <- ((nota1 + nota2 + nota3 + nota4) /4)
   escreval(resultado)
   escreval("---------------------")

Fimalgoritmo