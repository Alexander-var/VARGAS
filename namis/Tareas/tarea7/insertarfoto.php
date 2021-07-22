<?php session_start();
include ("conexion.php"); // conectarse
$id=$_POST['id'];
$idhabitaciones=$_POST['idhabitaciones'];

$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];
$fotografia=uniqid().".".$extension;

$sql="INSERT INTO personas (id , idhabitacion, fotografia) values ($id,$idhabitaciones,'$fotografia') "; //formar sql
//echo($sql);
$query=mysqli_query ($con, $sql);

mysqli_close ($con);

copy($_FILES['fotografia']['tmp_name'],'imagenes/'.$fotografia);

//if($resultado = mysqli_query ($con, $sql))
 //echo "Se inserto con éxito"; //ejecutar elsql
  //ejecutar elsql

//mysqli_close ($con); //cerrar
?>
<meta http-equiv="refresh" content="10;URL=fromfotografia.php">  