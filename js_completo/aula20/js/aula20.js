var linguagens = document.getElementById('linguagens');

linguagens.addEventListener('change', function() {
   //console.log(this.value);
   //console.log(this.options);
   var option = this.options;
   var itemAtual = this.selectedIndex;
   console.log(option[itemAtual].text);
   //console.log(option[itemAtual].value);
})