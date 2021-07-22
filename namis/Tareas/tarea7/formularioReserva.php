<?php
    include ("conexion.php");   
    $sql = "SELECT * FROM habitacion";
    $query = mysqli_query ($con, $sql);
 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="reservar.php" method="POST">

    <label for="fechaingreso">fechaingreso</label>
		<input type="date" name="fechaingreso" required> <br> <br>

		<label for="fechasalida">fechasalida</label>
		<input type="date" name="fechasalida" required> <br> <br>

        <label for="habitacion">Habitacion </label>
        <select name="habitacion"> 
            <?php
                while($fila = $query->fetch_object()){
                    echo '<option value="'.$fila->id.'">'.$fila->nro.'</option>';
                }
            ?>
        </select>
        <br>
		<br>
		<label for="nombre">nombres</label>
		<input type="text" name="nombre" required> <br> <br>
		
		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" required> <br> <br>

		<label for="correo">correo</label>
		<input type="email" name="correo" required> <br> <br>
        <button> Reservar </button>

</form>

</body>
</html>