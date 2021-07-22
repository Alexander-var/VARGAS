

<?php

$numeroPrincipal = $_POST['numeroPrincipal'];


for($i = 0 ; $i<$numeroPrincipal ; $i++){

    $numerador = $_POST['numerador'.$i];   //numerador1  = 1
    $denominador =  $_POST['denominador'.$i];  //demoninador1 = 2
    $suma = $numerador + $denominador ;  //suma = 3

    echo "<input type='number'  name='resultado" .$i. "'  value='".$suma. "'  ></input>";
}

?>