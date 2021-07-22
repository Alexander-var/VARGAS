<?php include ("conexion.php"); // conectarse
$sql="SELECT id,imagen,titulo,autor from libros";

 //formar sqlis
 echo $sql;
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
?>

<table border="1">
	<tr>
	<th>Fotografia</th>
	<th>Titulo </th>
	<th>Autor</th>
	</tr>
	<tbody>
		<?php
	while ($fila=$resultado->fetch_assoc())
		{
			?>
			<tr>
			<td><img src="images/<?php echo $fila['imagen'];?>" width="100px">   </td>
				<td><?php echo $fila['titulo'];?> </td>
				<td><?php echo substr($fila['autor'],1,100);?> </td>
				
			</tr>
		<?php 
		} ?>	
	</tbody>
</table>

<?php 
mysqli_close ($con); //cerrar

?>
