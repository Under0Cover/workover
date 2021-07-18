var nome = document.getElementById('nome');
var sobrenome = document.getElementById('sobrenome');

nome.addEventListener('blur', function() {
    sobrenome.value = this.value;
})