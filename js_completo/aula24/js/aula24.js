var form = document.querySelector('form');

form.addEventListener('submit', function(evento) {
    evento.preventDefault();
    var isValid = true;
    
    for (let indice = 0; indice < this.elements.length; indice++) {
        
        var item = this.elements[indice];

        if (item.type !== 'submit') {
            if (item.value == '') {
                item.classList.add('error');
                isValid = false;
            } else {
                item.classList.remove('error');
            }
        }

    }
})