<?php
    require('conexion.php');
    $idcarrera = $_GET['carrera'];
    $query = "SELECT * FROM libros WHERE idcarrera='$idcarrera'";
    $respuesta = $con->query($query);
    $array=Array();
    while($fila = $respuesta->fetch_object()){
        $array[]=array(
            'id'=>$fila->id,
            'titulo'=>$fila->titulo
        );
    }
    echo json_encode($array);
    
?>