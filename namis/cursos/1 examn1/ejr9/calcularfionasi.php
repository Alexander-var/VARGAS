
<?php 
echo "hola si llega informasion ";
include("examen.php");
$num = new examen($n,$a,$b,$c);
$num->calcularfionsi($_POST['n']);

?>
<meta http-equiv="refresh" content="1;URL=menu.html">  