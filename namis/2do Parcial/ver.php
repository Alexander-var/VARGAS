<?php include ("conexion.php"); // conectarse
$id=$_GET['id'];

$sql="SELECT id,titulo,texto,imagen from noticias where id=$id";

 //formar sqlis
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
$fila=$resultado->fetch_assoc();
?>
<img src="images/<?php echo $fila['imagen'];?>" width="100px">   	

<p>Titulo: <?php echo $fila['titulo'] ?></p>
<p>Texto: <?php echo $fila['texto'] ?></p>

<h3>Comentarios</h3>
<?php
$sql2="SELECT id,comentario from comentarios where idnoticia=$id";

 //formar sqlis
$resultado2 = mysqli_query ($con, $sql2) ; //ejecutar elsql

?>
<ul>
		<?php
	while ($fila2=$resultado2->fetch_assoc())
		{
			?>

	<li> <?php echo $fila2['comentario']; ?> </li>
		<?php
	}
	?>
</ul>


<?php 
mysqli_close ($con); //cerrar

?>
