<?php
if (isset($_COOKIE['contador'])) {
    $_COOKIE['contador'];
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Cantidad de veces que ingreso a pregunta1 : ' . $_COOKIE['contador'] . '<br>';
}
  
?>
   <?php echo $mensaje;?>
