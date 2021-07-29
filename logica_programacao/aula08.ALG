Algoritmo "reajusteSalarial"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Um algoritmo para calcular os reajustes salariais e imprimir o salário reajustado.
// Autor(a)    : Tales Oliver
// Data atual  : 29/07/2021
Var
// Seção de Declarações das variáveis 
salario: real
salarioReajustado: real
reajuste: real
salarioMinimo: real
nome: caracter
cargo: caracter

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
escreval("Informe o seu nome:")
leia(nome)

escreval("Informe o seu cargo:")
leia(cargo)

escreval("Informe o salário mínimo atual:")
leia(salarioMinimo)

escreval("Informe o seu salário:")
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

escreval("Sr(a) ",nome, ", o seu cargo de ",cargo,", receberá um reajuste de R$:",reajuste)
escreval("O seu salário passará a ser de R$: ",salarioReajustado," a partir do próximo mês!")

Fimalgoritmo