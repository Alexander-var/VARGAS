<?php
    include('clases.php');
    session_start();
    $registros = new Biblioteca();
    if (isset($_GET['columna'])) { // Si existe se envia la peticion
        // code...
        $orden = "ORDER BY ".$_GET['columna']." ".$_GET['orden'];
        $registross = $registros->leerLibross($orden);
    }else {
        // $orden = "ORDER BY".$_GET['columna']."DESC";
        $registross = $registros->leerLibross("ORDER BY id ASC"); // Por defecto
    }

    // ==========Solo se ejecuta cuando el usuario se logueo--y--nivel--1
    if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
        echo "Adimnistrador";
        ?>
<!-- Administrador-----------session html---------- -->
        <table border="1">
            <thead>
                <tr>
                    <th onclick="ordenarColumna(this)" id="imagen" > Imagen </th>
                    <th onclick="ordenarColumna(this)" id="titulo" > Titulo </th>
                    <th onclick="ordenarColumna(this)" id="autor" > Autor </th>
                    <th onclick="ordenarColumna(this)" id="ideditorial" > ID editorial </th>
                    <th onclick="ordenarColumna(this)" id="anio" > Año </th>
                    <th onclick="ordenarColumna(this)" id="idusuario" > ID usuario </th>
                    <th onclick="ordenarColumna(this)" id="idcarrera" > ID carrera </th>
                    <th onclick="" id="iditarh" >Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($reg=$registross->fetch_array()) {
                        echo "<tr>";
                        echo "<td>$reg[imagen]</td>";
                        echo "<td>$reg[titulo]</td>";
                        echo "<td>$reg[autor]</td>";
                        echo "<td>$reg[ideditorial]</td>";
                        echo "<td>$reg[anio]</td>";
                        echo "<td>$reg[idusuario]</td>";
                        echo "<td>$reg[idcarrera]</td>";
                        echo "<td id='editar'><a href='#'>Editar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <!-- ----------Fin de seccion html---------- -->
 <?php
    } else {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 0) {
            echo "Usuario";
            ?>
            <!-- ----------Seccion de html usuario normal---------- -->
            <table border="1">
                <thead>
                    <tr>
                        <th onclick="ordenarColumna(this)" id="imagen" > Imagen </th>
                        <th onclick="ordenarColumna(this)" id="titulo" > Titulo </th>
                        <th onclick="ordenarColumna(this)" id="autor" > Autor </th>
                        <th onclick="ordenarColumna(this)" id="ideditorial" > ID editorial </th>
                        <th onclick="ordenarColumna(this)" id="anio" > Año </th>
                        <th onclick="ordenarColumna(this)" id="idusuario" > ID usuario </th>
                        <th onclick="ordenarColumna(this)" id="idcarrera" > ID carrera </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($reg=$registross->fetch_array()) {
                            echo "<tr>";
                            echo "<td>$reg[imagen]</td>";
                            echo "<td>$reg[titulo]</td>";
                            echo "<td>$reg[autor]</td>";
                            echo "<td>$reg[ideditorial]</td>";
                            echo "<td>$reg[anio]</td>";
                            echo "<td>$reg[idusuario]</td>";
                            echo "<td>$reg[idcarrera]</td>";
                            echo "</tr>";
                        }
                        // session_unset();
                        // session_destroy();
                    ?>
                </tbody>
            </table>
        <!-- ----------Fin de la seccion de html usuario normal------- -->
<?php
        } else {
            echo "Usted no se logueo";
        }
    }
?>

<!-- <table border="1">
    <thead>
        <tr> -->
            <!-- <th> <a href="#">Imagen</a> </th>
            <th> <a href="#">Titulo</a> </th>
            <th> <a href="#">Autor</a> </th>
            <th> <a href="#">ID editorial</a> </th>
            <th> <a href="#">Año</a> </th>
            <th> <a href="#">ID usuario</a> </th>
            <th> <a href="#">ID carrera</a> </th>
            <th>Editar</th> -->

            <!-- <th onclick="ordenarColumna(this)" id="imagen" > Imagen </th>
            <th onclick="ordenarColumna(this)" id="titulo" > Titulo </th>
            <th onclick="ordenarColumna(this)" id="autor" > Autor </th>
            <th onclick="ordenarColumna(this)" id="ideditorial" > ID editorial </th>
            <th onclick="ordenarColumna(this)" id="anio" > Año </th>
            <th onclick="ordenarColumna(this)" id="idusuario" > ID usuario </th>
            <th onclick="ordenarColumna(this)" id="idcarrera" > ID carrera </th>
            <th onclick="" id="iditarh" >Editar</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table> -->