<?php
    if(isset($_COOKIE['contador'])){
        if($_COOKIE['contador']>=1){
            setcookie('contador', $_COOKIE['contador']+1,time()+365*24*60*60);
            $mensaje = 'gracias por ya ser un visitante frecuente usted visito este sitio:'.$_COOKIE['contador'].'<br>';
        }else{
          $mensaje = "bienvenido";
        }
    }else{
        setcookie('contador',1,time()+365*24*60*60);
        $mensaje="<span class='color'>'bienvenido'</span>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 20</title>
</head>
<body>
    <?php echo $mensaje;
    ?>
</body>
</html>
<style>
    .color{
      background: blue;
    }
</style>
