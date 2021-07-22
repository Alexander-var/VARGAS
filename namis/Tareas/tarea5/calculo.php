<?php

    $n = $_POST['n'] ;
    $m = $_POST['m'];

    if($n % $m == 0){
        echo "<img src='esmultiplo.jpg'></img>";
    }else{
        echo '<img src="noesmultiplo.jpg"></img>';
    }

?>