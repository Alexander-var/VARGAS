<?php

    $fila = $_POST['fila'];
    $columna = $_POST['columna'];
    $contador = 0;
    echo "<table border='1' style='width:500px; height:300px'>";

    for($i = 0 ; $i<$fila ; $i++){
        echo "<tr>";
        for($j = 0; $j<$columna ; $j++){
            if($j % 2 == 0 ){
                if($contador == 0){
                    echo "<td style='background:red; '> </td>"; 
                    $contador++;
                }else{
                    if($contador == 1){
                        echo "<td style='background:yellow;'> </td>"; 
                        $contador++;  
                    }else{
                        if($contador == 2){
                            echo "<td style='background:green;'></td>"; 
                            $contador=0;  
                        }
                    }
                }               
            }else{
                if($i % 2 == 0){
                    echo "<td></td>";
                }else{
                    echo "<td style='background:red;'></td>";
                }
                
            }

        }
        echo "</tr>";

    }

    echo "</table>";
?>

