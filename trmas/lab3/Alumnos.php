<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="design.css">
    </head>
    <body>
        <?php
               include ('conexcion.php');
                if ($mysql->connect_error)
                die("Problemas con la conexión a la base de datos");
                $nombres = array();
                $apellidos = array();
                $cus = array();
                $sexos = array();
                $carreras = array();
                $contador = 0;
                foreach ($_POST['nombres'] as $value) {
                    $nombres[$contador] = $value;
                    $contador++;

                }

                $contador = 0;
                foreach ($_POST['apellidos'] as $value) {
                    $apellidos[$contador] = $value;
                    $contador++;

                }

                $contador = 0;
                foreach ($_POST['CU'] as $value) {
                    $cus[$contador] = $value;
                    $contador++;

                }

                $contador = 0;
                for ($i=0; $i < $_POST['limite']; $i++) {
                    $sex = "sexo".$i;
                    $sexos[$i] = $_POST[$sex];

                }

                $contador = 0;
                foreach ($_POST['carrera'] as $value) {
                    $carreras[$contador] = $value;
                    $contador++;
                }

                echo "$_POST[limite]";
                for ($i=0; $i < $_POST['limite']; $i++) {
                    $mysql->query("INSERT INTO Alumnos(nombres,apellidos,cu,sexo,codigocarrera)
                    VALUES('$nombres[$i]','$apellidos[$i]','$cus[$i]','$sexos[$i]',$carreras[$i])")or
                    die("Problemas en el insert alumnos".$mysql->error);
                }
                echo "<Alumnos agregados correctamente";
         ?>
<!-- =============================================================== -->
         <?php
             $mysql = new mysqli("localhost","root","","bd_alumnos");
             if ($mysql->connect_error)
             die("Problemas con la conexión a la base de datos");
             $registros = $mysql->query("SELECT *
                             FROM Alumnos A INNER JOIN carreras c ON
                             A.codigocarrera = c.codigo")or
                             die("Problemas en el select InnerJoin".$mysql->error);
          ?>
         <table>
             <thead>
                 <tr>
                     <th>Nro</th>
                     <th>Nombre</th>
                     <th>Apellidos</th>
                     <th>CU</th>
                     <th>Sexo</th>
                     <th>Carrera</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                     while ($reg = $registros->fetch_array()) {
                         echo "<tr>";
                             echo "<td>$reg[id]</td>";
                             echo "<td>$reg[nombres]</td>";
                             echo "<td>$reg[apellidos]</td>";
                             echo "<td>$reg[cu]</td>";
                             echo "<td>$reg[sexo]</td>";
                             echo "<td>$reg[codigocarrera]</td>";
                         echo "</tr>";
                     }
                  ?>
             </tbody>
         </table>
<!-- ================================================================= -->
    </body>
</html>
