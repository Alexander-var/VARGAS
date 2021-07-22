<?php 
include ('conexion.php');


for ($i=1; ; $i++) { 
    if(isset($_POST['nombre'.$i])){

        $nombre = $_POST['nombre'.$i];
        $apellido = $_POST['apellido'.$i];
        $cu=$_POST['cu'.$i];
        $sexo=$_POST['sexo'.$i];
        $carrera=$_POST['carrera'.$i];

        $sql = "INSERT INTO `alumnos` (`nombres`, `apellidos`,`cu`, `sexo`,`codigo_carrera`)
        VALUES ('$nombre', '$apellido', '$cu', '$sexo', $carrera )";
        $query = mysqli_query ($con, $sql);
        
        echo $query? '<meta http-equiv="refresh" content="3;URL=ListaAlumnos.php">': "Algo salio mal ";
    }
    else{
        break;
    }
}


?>

