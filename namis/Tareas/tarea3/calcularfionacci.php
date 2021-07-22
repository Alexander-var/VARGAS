
<?php 
echo "hola si llega informasion ";
include("examen.php");
session_start();
$_SESSION['examen']->calcularfionsi($_POST['n']);

?>
<meta http-equiv="refresh" content="1;URL=menu.html">  
