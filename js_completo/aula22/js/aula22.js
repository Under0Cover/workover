var text = document.getElementById('search');
var result = document.getElementById('result');
var resultDefaultText = 'Nenhum resultado';

text.addEventListener('keyup', function() {
    var value = this.value;
    if (value != '' ) {
        result.innerText = this.value;    
    } else {
        result.innerText = resultDefaultText;
    }
})