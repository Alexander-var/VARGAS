<?php 
    class Cuadrado{
        private $cadena; // Tecno

        //CONTRUCTOR
        public function __construct($cadena){
            $this->cadena = $cadena;
        }


        public function dibujar(){
            
            $cantidadRepeticiones = strlen($this->cadena); // strlen te devuelve la cantidad de letras de un String
            
            // TODA NUESTRA LOGICA DEL DIBUJO
            echo $this->cadena;
            echo "<br>";

            for($i = 1; $i <= $cantidadRepeticiones-2  ; $i++){  
                echo substr($this->cadena , $i, 1 ); // substr saca una o mas  LETRA de un STRING  
                for($j = 1 ; $j <= $cantidadRepeticiones-2 ; $j++ ){
                    echo "<span class='espacios'>*</span>";  //&nbsp; te imprime espacios blancos
                }
                echo substr($this->cadena ,  -($i+1) , 1 ); // substr saca una o mas  LETRA de un STRING      

                echo "<br>";
                
            }

            for($i = 1; $i <= $cantidadRepeticiones ; $i++){
                    echo substr($this->cadena , -$i ,1);
            }



        }

    } 
?>
<style>
    .espacios{
        color: white;
    }
</style>

<!--
*
**
***
****
*****
******


    *
   ***
  *****
 *******
*********   


******
*    *
*    *
******
*    *
*    *


*   *   *
 * * * *
  *   *
-->


