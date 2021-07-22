<?php
include ('conexion.php');
$fechaIngreso = $_POST['fechaingreso'];
$fechasalida = $_POST['fechasalida'];
$habitacion = $_POST['habitacion'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];

// Diferencia de DIAS DE RESERVA
$formatoFechaIngreso = date("Y-m-d", strtotime($fechaIngreso));
$formatoFechasalida = date("Y-m-d", strtotime($fechasalida));
$date1 = new DateTime($formatoFechaIngreso);
$date2 = new DateTime($formatoFechasalida);
$diff = $date1->diff($date2);
$diferencia = $diff->days;  



$sqlPrecioHabitacion = "SELECT precio FROM habitacion WHERE habitacion.id = ".$habitacion.""; 
$queryprecio = mysqli_query ($con, $sqlPrecioHabitacion);

while($fila = $queryprecio->fetch_array()){
    $precio = $fila['precio'];
}

$precio = $precio*$diferencia;
$codigoReserva =uniqid();

$sql = "INSERT INTO reservas(codigoreserva,fechaingreso, fechasalida, idhabitacion, precio, pagada, nombre, apellidos, correoelectronico)
         VALUES ('$codigoReserva','$fechaIngreso', '$fechasalida', $habitacion, $precio, 1, '$nombre', '$apellidos', '$correo') ";

$query = mysqli_query ($con, $sql);         

echo $query?"Se Registro":"NO se Registro";

?>