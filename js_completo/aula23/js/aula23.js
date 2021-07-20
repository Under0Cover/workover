var text = document.getElementById('text');
var result = document.getElementById('result');

const KEYENTER = 13;

text.addEventListener('keypress', function(evento) {
    if (evento.keyCode == KEYENTER) {
        result.style.display = 'block';
    }
})