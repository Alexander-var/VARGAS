<?php
require('conexion.php');

$query = 'SELECT * FROM carreras';

$resultado = $con->query($query);

?>
<div class="row">
    <div class="offset-md-2 col-md-6">
        <form action=""></form>
        <select name="carrera" id="carrera" onchange="selectCarrera();" class="form-control">
            <?php
            while ($fila = $resultado->fetch_object()) {
                echo '<option value="'.$fila->id.'">'.$fila->carrera.'</option>';
            }
            ?>
        </select>
        <br>
        <select name="Libro" id="libros" class="form-control">
        </select>
        <br>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Presente">
        <input type="button" class="btn btn-primary" value="Registrar" onclick="registrarPrestamo();">
        </form>
    </div>
</div>

<script src="ajax.js"></script>