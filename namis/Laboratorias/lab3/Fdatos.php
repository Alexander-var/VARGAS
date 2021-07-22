<table border=1>
<tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Cu</th>
    <th>Sexo</th>
    <th>Codigo Carrera</th>
</tr>
<?php       
include ('conexion.php');

$sqlcarreras = "SELECT codigo, carrera FROM carreras"; 


$n =$_POST['numero'];
echo '<form action="alumnos.php" method="POST">';

for ($i=1; $i<=$n ; $i++) { 
    $query = mysqli_query($con, $sqlcarreras);
    echo '<tr>';
?>

<td> <input type="text" name="nombre<?php echo $i; ?>" required></td>
<td> <input type="text" name="apellido<?php echo $i; ?>" required> </td>
<td> <input type="number" name="cu<?php echo $i; ?>" required> </td>
<td> Masculino <input type="radio" name="sexo<?php echo $i; ?>" value="M">
Femenino <input type="radio" name="sexo<?php echo $i; ?>" value="F"> </td>

<td><select name="carrera<?php echo $i; ?>"> 
    <?php
        while($fila = $query->fetch_object()){
            echo '<option value="'.$fila->codigo.'">'.$fila->carrera.'</option>';
        }
    ?>
</select></td>
<br>
<br>
<?php

echo '</tr>';}

?>

</table>
<button> Reservar </button>
</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>



