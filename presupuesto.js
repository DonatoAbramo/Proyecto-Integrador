





console.log("probando js");


var boton = document.getElementById('botonsito');


boton.addEventListener('click',prueba);

function prueba(){


var cantidadSesiones = document.getElementById('num1').value;

var output = document.getElementById('num2');

output.textContent = "Precio final: "+cantidadSesiones*100+"$";




}





















