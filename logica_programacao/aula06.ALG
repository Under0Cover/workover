Algoritmo "calculoMediaEFrequencia"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Algoritmo de C�lculo de M�dia e Frequ�ncia
// Autor(a)    : Tales Oliver
// Data atual  : 27/07/2021
Var
// Se��o de Declara��es das vari�veis
       nota1: real
       nota2: real
       nota3: real
       nota4: real
       media: real
       nome: caracter
       frequencia: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreval("Digite o seu nome:")
   leia(nome)
   escreval("Digite a sua frequ�ncia:")
   leia(frequencia)
   escreval("Digite a nota do 1� Bimestre:")
   leia(nota1)
   escreval("Digite a nota do 2� Bimestre:")
   leia(nota2)
   escreval("Digite a nota do 3� Bimestre:")
   leia(nota3)
   escreval("Digite a nota do 4� Bimestre:")
   leia(nota4)
   escreval("-----------------------------")
   media <- ((nota1 + nota2 + nota3 + nota4) /4)
   escreval("A sua m�dia �:",media)
   escreval("-----------------------------")
   se (frequencia >= 75) entao
      se (media >= 9) entao
         escreva(nome, ", voc� foi aprovado com Louvores! Parab�ns!")
      senao
            se (media >= 7) entao
                 escreval(nome, ", voc� foi aprovado. Muito bom!")
      fimse
         senao
           escreval(nome, ", infelizmente, voc� foi reprovado!")
         fimse
   senao
        escreval(nome, ", infelizmente, voc� foi reprovado por frequ�ncia!")
   fimse
Fimalgoritmo