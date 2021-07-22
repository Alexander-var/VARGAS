
//funcion cargar
function cargar(pagina) {
	document.getElementById('resultado').innerHTML='';
var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
ajax.open("get", pagina, true); //a quien llamara
ajax.onreadystatechange = function() { // funcion de respuesta
if (ajax.readyState == 4) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
}
}
ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
ajax.send(); //llamar a la pagina
}


function autenticar() {

var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 

var parametros = "txtCorreo=" + encodeURI(document.getElementById('correo').value) + "&txtPassword=" + encodeURI(document.getElementById('password').value) + "&nocache=" + Math.random();
            //alert(parametros);

            ajax.open("post", "autenticar.php", true); //a quien llamara
            ajax.onreadystatechange = function() { // funcion de respuesta
                if (ajax.readyState == 4) {
					//document.getElementById('contenido').innerHTML= ""
                    document.getElementById("resultado").innerHTML = ajax.responseText;
                    console.log(document.getElementById("user"));
                    if (document.getElementById("user")!=null)
                    {  document.getElementById("usuario").innerHTML=document.getElementById("user").innerHTML;
                	  document.getElementById("nivel").innerHTML=document.getElementById("niv").innerHTML;
            			}
            			else
            		{  document.getElementById("usuario").innerHTML="";
                	  document.getElementById("nivel").innerHTML="";
            			}
            				
                    
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
            ajax.send(parametros); //llamar a la pagina
          
        }

// PREGUNTA 4 Y  5

  function armarCajas(e) {
	e.preventDefault();
	let div = "";
	numero = document.getElementById("numero").value;
	if (numero === "") {
	  alert("Introduzca un numero");
	} else {
	  for (let i = 0; i < numero; i++) {
		div += `<input type="number"  id="numero${i}"><br><br>`;//i para que se lo asisge un id desferente en cada imput
	  }
	  div += `<input type="button" class="btn btn-primary" value="+" onclick="sumar(${numero})">`;//concatena a elementos de tipo id
	  document.getElementById("contenido").innerHTML = div; //asignai la variable div al contenido
	}
  }
  
  function sumar(numero) {
	let suma = 0;
	for (let i = 0; i < numero; i++) {
	  suma += parseInt(document.getElementById(`numero${i}`).value);//sumamos cada elemento de impumt
	  console.log(suma);
	}
  
	document.getElementById("resultado").innerHTML = suma;
  }
  
  
  function selectCarrera() {
	const carrera = document.getElementById("carrera").value;
	let libros = document.getElementById("libros");
	libros.innerHTML=''; 
	const ajax = new XMLHttpRequest();
	ajax.open("GET", `listLibros.php?carrera=${carrera}`, true); //pasamos el id de la carrera 
	ajax.onload = function () {
	  if (this.status == 200) {
		var datos = JSON.parse(this.responseText); // traye los libros JSON.parse(para converit de php a javasap)
		datos.forEach(function (libro) { //recorrer todos los libros
		  const option = document.createElement("option");// elemeto de tipo obsion
		  option.innerHTML = libro.titulo;// registra el tutulo del libro
		  option.value=libro.id;//regista ell id del libro
		  libros.appendChild(option);
		});
  }
	};
	ajax.send();
  }
  
  
 function registrarPrestamo(){
	formData = new FormData();//formulario que lo bamos a pasar
	formData.append("carrera", document.getElementById("carrera").value); //añada el valor de id carrera a carrera  
	formData.append("libro", document.getElementById("libros").value);
	formData.append("nombre", document.getElementById("nombre").value);
	console.log(formData);
	fetch('registrarPrestamo.php', { //llamos al archivo registrar prestamo 
		method: 'post', 
		body: formData     //son el formulario que que lo pasamos
	}).then(function (response) { //esperamos la respuesta
		return response.text();
	}).then(function (text) {
		// document.getElementById('contenido').innerHTML = 
		alert(text); //mostrar la respuesta

	}).catch(function (err) { //si es que hay un error 
		alert('error');
	});
};