<?php
    require('conexion.php');
    $carrera = $_POST['carrera'];
    $libro = $_POST['libro'];
    $nombre = $_POST['nombre'];
    $query = "INSERT INTO `prestamos` (`idlibro`, `nombreprestamo`) VALUES ('$libro', '$nombre');";
    
    $respuesta = $con->query($query);
    
    echo $respuesta?"OK, Se registro con exito":"FAIL, no se puedo registrar";
?>