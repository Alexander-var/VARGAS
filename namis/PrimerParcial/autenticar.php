<?php session_start(); 
    include('conexion.php');
    $correo=$_POST["txtCorreo"];
    $password=sha1($_POST["txtPassword"]);
	$sql = "Select nombres,apellidos,nivel from usuarios WHERE correo='$correo' AND password='$password' ";
	//echo $sql;
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		$_SESSION['nombres']=$fila['nombres'];
		$_SESSION['apellidos']=$fila['apellidos'];
		$_SESSION['nivel']=$fila['nivel'];
		header("Location:index.php");
		}
		else
		{?>
		<div style="color: red; text-align: center;"> Datos de Autenticación Equivocados </div>

		<?php } 
?>