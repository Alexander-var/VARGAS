
<?php
$n =$_POST['numero'];

echo "<form action='calcular.php' method='POST'>";

for($i =0 ; $i<$n ; $i++){
    echo "<input class='cuadro'   type='number' name='numerador".$i."'  ></input>";
}
echo "<br>";

for($i =0 ; $i<$n ; $i++){
    echo "<input class='cuadro' type='number' name='denominador".$i."'></input>";
}

// INPUT INVISIBLE
echo "<input type='hidden' name='numeroPrincipal' value='".$n."'  ></input>";


echo "<br>";
 echo "<button>calcular</button>";

echo"</form>"; 
?>
<style>
    .cuadro{
        width: 30;
        margin-right: 15px;
        margin-bottom: 15px;
    }
</style>