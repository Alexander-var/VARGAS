<?php
    include('clases.php');
    $guardar = new Biblioteca();
    $guardar->insertar($_REQUEST['idp'],$_REQUEST['nombre']);
    echo "Guardado exitosamente";
 ?>
