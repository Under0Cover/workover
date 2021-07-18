var link = document.getElementById('link');
var conteudo = document.getElementsByClassName('conteudo');

link.addEventListener('mouseover', function () {
    link.classList.add('link');
})

link.addEventListener('mouseleave', function () {
    link.classList.remove('link');
})

for (var indice = 0; indice < conteudo.length; indice++) {
    conteudo[indice].addEventListener('mouseover', function () {
        this.classList.add('conteudoBackgrounde');
    })
    conteudo[indice].addEventListener('mouseleave', function () {
        this.classList.remove('conteudoBackgrounde');
    })
}