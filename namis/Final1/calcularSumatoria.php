<?php

include("class_final.php");
$n = $_GET['n'];
$cadena = 'ab';
$clase = new __final($n, $cadena);

echo $clase->CalcularSumatoria();