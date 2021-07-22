<?php

include("class_final.php");
$n = 0;
$cadena = $_POST['cadena'];
$clase = new __final($n, $cadena);
?>
<div class="row">
    <div class="col-6">
    <?php
    echo $clase->CalcularDiagonal();
    ?>
    </div>
</div>
