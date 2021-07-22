<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
      </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CU</th>
                    <th>Sexo</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <?php
            echo "<form class=\"formulario\" action=\"Alumnos.php\" method=\"post\"> ";
                echo "<input hidden=\"text\" name=\"limite\" value=\"$_POST[limite]\">";
                for ($i=0; $i < $_POST['limite']; $i++) {
                    echo "$i";
                    echo "<input type=\"text\" name=\"nombres[]\" value=\"\">";
                    echo "<input type=\"text\" name=\"apellidos[]\" value=\"\">";
                    echo "<input type=\"text\" name=\"CU[]\" size=\"8\" value=\"\">";
                    echo "<input type=\"radio\" name=\"sexo$i\" required value=\"M\">Masculino";
                    echo "<input type=\"radio\" name=\"sexo$i\" required value=\"F\">Femenino";
                    echo "<select class=\"\" name=\"carrera[]\">";
                        $my = new mysqli("localhost","root","","bd_alumnos");
                        if ($my->connect_error)
                        die("Problemas con la conexión a la base de datos");
                        $registros = $my->query("SELECT * FROM carreras")or
                                            die("Problemas en el select carreras");
                        while ($reg = $registros->fetch_array()) {
                            echo "<option value=\"$reg[codigo]\">$reg[carrera]</option>";
                        }
                    echo "</select>";
                    echo "</br>";
                }
                echo "<div class=\"boton\">
                            <input type=\"submit\" name=\"\" value=\"Insertar\">
                            <input type=\"reset\" name=\"\" value=\"Borrar\">
                        </div>";
            echo "</form>";
         ?>
    </body>
</html>
