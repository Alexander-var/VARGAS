<?php
    include ('conexion.php');
    $sql="select * from usuarios";
    $resultado=$con->query($sql);

    // se ejecuta Cuando le damos al boton enviar se crea N
    if(isset($_POST['n'])){
        $n = $_POST['n'];
        for ($i=1; $i <= $n ; $i++) { 

            $nombre = $_POST['nombre'.$i];
            $apellido = $_POST['apellido'.$i];
            $correo = $_POST['correo'.$i];
            $id = $_POST['id'.$i];

            $sql2 = "UPDATE usuarios SET nombres = '$nombre', apellidos = '$apellido', correo = '$correo' WHERE usuarios.id =  $id ";
            $resultado=$con->query($sql2);
            echo $resultado?'<meta http-equiv="refresh" content="3;URL=pregunta5.php"> ':"HUBO ALGUN PROBLEMA AL ACTULIZAR";
        
        }
    }else{
   

?>
<table border="1" with="100%">
	<tr style="color: white;background-color:#170C52 ">
	<th >Nombres</th>
	<th>Apellidos</th>
	<th>Correo</th>	

<form action="pregunta5.php" method="POST">  
<?php
    $con = 1;
    while($fila = $resultado->fetch_object()){
        if($con%2==0){
            echo "<tr style='background-color:A6E7DD; width:300px; height:80px'>
            <td> <input style='background-color:170C52; color:white' value=' ".$fila->nombres." ' name = 'nombre".$con."' ></td>    
            <td> <input style='background-color:170C52; color:white' value=' ".$fila->apellidos." ' name = 'apellido".$con."'></td>    
            <td> <input style='background-color:170C52; color:white'value=' ".$fila->correo." ' name = 'correo".$con."'></td>
            <td><input type = 'text' value=' ".$fila->id." ' name = 'id".$con."'></td>
             <input type='text' value=' ".$con." ' name = 'n'>   
            </tr>";
         // n =  hidden me saca cuantos registros tengo en mi base de datos que serias tres 
         // fila-> id me nuestra que fila esotoy haciendo la actualizacion    
        }else{
            echo "<tr style='background-color:#A6BCE7; width:300px; height:80px''>
            <td> <input style='background-color:170C52; color:white 'value=' ".$fila->nombres." ' name = 'nombre".$con."' ></td>    
            <td> <input style='background-color:170C52; color:white' value=' ".$fila->apellidos." ' name = 'apellido".$con."'></td>    
            <td> <input style='background-color:170C52; color:white' value=' ".$fila->correo." ' name = 'correo".$con."'></td>
            <td><input type = 'text' value=' ".$fila->id." ' name = 'id".$con."'></td>

             <input type = 'text' 'hidden' value=' ".$con." ' name = 'n'>   
            </tr>";
        }
       $con++;
    }
    echo '<input type="submit" value="actualizar">'
?>

</form>

<?php }
?>