<?php
    include('clases.php');
    // =========lee las carrerar===================
    $carreras = new Biblioteca();
    $registros=$carreras->leerCarreras();
    echo '<select id="carreras" onchange="leerLibros()" class="" name="">';
        while ($reg = $registros->fetch_array()) {
            echo "<option value=\"$reg[id]\">$reg[carrera]</option>";
        }
    echo '</select>';
 ?>
 <!-- =============lee los libros============ -->
 <br>Libros
    <div id="libros">

    </div>
    Nombre del Prestante<input type="text" id="nombre" value=""><br>
    <button type="button" onclick="guardarPrestamo()">Registrar</button>
    <div id="contenido">

    </div>
<!-- <script type="text/javascript">
    function leerLibros(){
        let seleccionado = parseInt(document.getElementById('carreras').value);
        console.log(seleccionado);
        const url = 'leerLibros.php?llave='+seleccionado;
        fetch(url)
        .then(function(response){
            if (response.ok) {
                return response.text();
            }else {
                throw "Error en la llamada al servidor";
            }
        })
        .then(function(texto){
            document.getElementById('libros').innerHTML=texto;
            console.log("texto de prueba");
        })
        .catch(function(error){
            console.log(error);
        });
    }
    function guardarPrestamo(){
        let idlibro = parseInt(document.getElementById('librosss').value);
        let nombreprestamo = document.getElementById('nombre').value;
        console.log(idlibro,nombreprestamo);
        const url = 'guardarPrestamo.php?idp='+idlibro+'&nombre='+nombreprestamo;
        fetch(url)
        .then(function(response){
            if (response.ok) {
                return response.text();
            }else {
                throw "Error en la llamada al servidor";
            }
        })
        .then(function(texto){
            document.getElementById('contenido').innerHTML=texto;
            console.log("texto de prueba");
        })
        .catch(function(error){
            console.log(error);
        });
    }
</script> -->
