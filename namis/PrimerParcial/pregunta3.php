<?php

    include ('conexion.php');
    $sql="select * from usuarios";
    $resultado=$con->query($sql);
?>
<table border="1">
	<tr style="color: white;background-color:#0000FF ">
	<th >Nombres</th>
	<th>Apellidos</th>
	<th>Correo</th>	
<?php
  
    while($fila = $resultado->fetch_object()){
		
        if($fila->estado=='V'){
            echo "<tr style='background-color:white;'>
            <td>".$fila->nombres."</td>    
            <td>".$fila->apellidos."</td>    
            <td>".$fila->correo."</td>    
            </tr>";
        }else{
            echo "<tr style='background-color:red;'>
            <td>".$fila->nombres."</td>    
            <td>".$fila->apellidos."</td>    
            <td>".$fila->correo."</td>    
            </tr>";
        }
       
    }
?>