<?php
    include('clases.php');
// =======Libros====================
    if (isset($_REQUEST['llave'])) {
        $carreras = new Biblioteca();
        $registros=$carreras->leerLibros($_REQUEST['llave']);
        echo '<select id="librosss" name="">';
        while ($reg = $registros->fetch_array()) {
            echo "<option value=\"$reg[id]\">$reg[titulo]</option>";
        }
        echo '</select>';
    }
 ?>
