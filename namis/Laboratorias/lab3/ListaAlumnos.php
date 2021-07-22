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
$sql = "SELECT * FROM alumnos INNER JOIN carreras on alumnos.codigo_carrera = carreras.codigo";
$query = mysqli_query($con, $sql);

while($fila = $query->fetch_object()){

    echo '<tr>

    <td>'.$fila->nombres.'</td>
    <td>'.$fila->apellidos.'</td>
    <td>'.$fila->cu.'</td>
    <td>'.$fila->sexo.'</td>
    <td>'.$fila->carrera.'</td>
    
    </tr>';
}



?>

</table>