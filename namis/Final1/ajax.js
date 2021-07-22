function cargar(pagina) { //funcion de cargar 
    var ajax = new XMLHttpRequest() 
    ajax.open("get", pagina, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById("cuerpo").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(); 
}
//CALCULAR LA SUMA POR GET 
function calcularGET() {
    num = document.getElementById('num').value;
    var ajax = new XMLHttpRequest() 
    ajax.open("get", 'calcularSumatoria.php?n='+num, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById("cuerpo").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(); 
}
//CALCULAR LA CADENA POR POST
function calcularPOST(){
    cadena = document.getElementById('cadena').value;
    var ajax = new XMLHttpRequest() 
    var parametros = "cadena=" + cadena + "&Nocache=" + Math.random();
    ajax.open("post", "calcularDiagonal.php", true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
             document.getElementById("cuerpo").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
//pregunta 3
function crear(){
    html = '';
    if(document.getElementById('selec').value == 1){
        html = html +'<input class="form-control" type="text">';
        document.getElementById('resultado').innerHTML += html;
    }else{
    html =   html+ '<input class="form-control" type="date">';
    document.getElementById('resultado').innerHTML += html;
    }
}

//para la pregunta 4
function autenticar() {

    var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    
    var parametros = "txtCorreo=" + encodeURI(document.getElementById('correo').value) + "&txtPassword=" + encodeURI(document.getElementById('password').value) + "&nocache=" + Math.random();
                //alert(parametros);
    
                ajax.open("post", "autenticar.php", true); //a quien llamara
                ajax.onreadystatechange = function() { // funcion de respuesta
                    if (ajax.readyState == 4) {
                        //document.getElementById('cuerpo').innerHTML= ""
                        document.getElementById("cuerpo").innerHTML = ajax.responseText;
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
    