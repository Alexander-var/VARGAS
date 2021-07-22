<?php
  $fila=$_POST['tabla'];
 $columna=$_POST['columna'];
  echo$fila,$columna;

  echo "<form action='calcular.php' method='POST'>";

for($i =0 ; $i<$fila+1 ; $i++){
    echo "<br>";
    for($j =0 ; $j<$columna+1 ; $j++){
    echo "<input class='cuadro'   type='number' name='$i".$j."'  ></input> ";
    }
}
echo "<br>";
 echo "<button>calcular</button>";
 echo "<br>";

echo"</form>"; 

echo "<form action='llenar.php' method='POST'>";
echo "<button>llemarvalores</button>";
echo"</form>"; 


?>