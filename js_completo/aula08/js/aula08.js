var versa = document.createElement('p');
versa.innerHTML = 'Versa';

var sentra = document.createElement('p');
sentra.innerHTML = 'Sentra';

var gol = document.createElement('p');
gol.innerHTML = 'Gol';

document.getElementById('nissan').appendChild(gol);
document.getElementById('nissan').appendChild(versa);
document.getElementById('nissan').appendChild(sentra);


/* remove */

document.getElementById('nissan').removeChild(gol);