<?php  session_start();
include("conexion.php"); 
$sql="SELECT id from habitacion ";
$resultado = mysqli_query ($con, $sql) ;
//echo $resultado; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar</title>
</head>
<body>
<form action="insertarfoto.php" method="POST" enctype="multipart/form-data" >

    <label for="id">id:</label>
	<input type="number" name="id"> <br>

	<label for="idhabitaciones">habitacion:</label>
	<select name="idhabitaciones" >
		<?php
	while ($fila=$resultado->fetch_assoc())
		{
			?>
		<option value="<?php echo $fila['id']?>"><?php echo $fila['id']?></option>	
		<?php }?>

	</select> <br>

    <label for="fotograria">Fotografia:</label>
	<input type="file" name="fotografia"> <br>


	<input type="submit" value="insertar">


	
</form>

</body>
</html>