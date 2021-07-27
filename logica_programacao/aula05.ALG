Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Algoritmo de Cálculo de Média
// Autor(a)    : Tales Oliver
// Data atual  : 27/07/2021
Var
// Seção de Declarações das variáveis 
       nota1: real
       nota2: real
       nota3: real
       nota4: real
       media: real
       nome: caracter

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval("Digite o seu nome:")
   leia(nome)
   escreval("Digite a nota do 1º Bimestre:")
   leia(nota1)
   escreval("Digite a nota do 2º Bimestre:")
   leia(nota2)
   escreval("Digite a nota do 3º Bimestre:")
   leia(nota3)
   escreval("Digite a nota do 4º Bimestre:")
   leia(nota4)
   escreval("-----------------------------")
   media <- ((nota1 + nota2 + nota3 + nota4) /4)
   escreval("A sua média é:",media)
   escreval("-----------------------------")
   se (media >= 9) entao
      escreva(nome, ", você foi aprovado com Louvores! Parabéns!")
   senao
        se (media >= 7) entao
           escreval(nome, ", você foi aprovado. Muito bom!")
   fimse
   senao
        escreval(nome, ", infelizmente, você foi reprovado!")
   fimse
Fimalgoritmo