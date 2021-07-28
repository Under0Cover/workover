Algoritmo "escolhaCaso"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Tales Oliver
// Data atual  : 27/07/2021
Var
// Seção de Declarações das variáveis 
time: caractere

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("Entre com um time:")
leia(time)

escolha time
   caso "flamengo", "vasco", "fluminense", "botafogo"
   escreval("Esse time é carioca!")
   caso "santos", "palmeiras", "saopaulo", "corinthians"
   escreval("Esse time é paulista!")
fimescolha

Fimalgoritmo