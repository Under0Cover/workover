Algoritmo "reajusteSalarial"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Um algoritmo para calcular os reajustes salariais e imprimir o sal�rio reajustado.
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Se��o de Declara��es das vari�veis 
salario: real
salarioReajustado: real
reajuste: real
salarioMinimo: real
nome: caracter
cargo: caracter

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
escreval("Informe o seu nome:")
leia(nome)

escreval("Informe o seu cargo:")
leia(cargo)

escreval("Informe o sal�rio m�nimo atual:")
leia(salarioMinimo)

escreval("Informe o seu sal�rio:")
leia(salario)

se (salario <= salarioMinimo ) entao
  reajuste <- salario * 0.25
  salarioReajustado <- salario * 1.25
senao
  se ( salario <= (salarioMinimo * 3) ) entao
    reajuste <- salario * 0.5
    salarioReajustado <- salario * 1.50
  senao
    reajuste <- salario * 0.1
    salarioReajustado <- salario * 1.1
  fimse
fimse

escreval("Sr(a) ",nome, ", o seu cargo de ",cargo,", receber� um reajuste de R$:",reajuste)
escreval("O seu sal�rio passar� a ser de R$: ",salarioReajustado," a partir do pr�ximo m�s!")

Fimalgoritmo