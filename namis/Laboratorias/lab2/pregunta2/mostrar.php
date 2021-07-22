<?php
session_start();
require_once("operaciones.php");
$a = $_SESSION['a1'];
$b = $_SESSION['b1'];
$c =$_SESSION['c1'];

$operaciones = new _operaciones($a, $b, $c);
$operaciones->mostrarCalculos();
echo "<table border='1'>
        <tr>
            <th scope='col'>valor de A</th>
            <th scope='col'>valor de B</th>
            <th scope='col'>valor de C</th>
        </tr>
        <tr>
            <td>".$a."</td>
            <td>".$b."</td>
            <td>".$c."</td>
        </tr>
        <tr>
            <td>Multiplicacion</td>
            <td>Menor</td>
        </tr>
        <td>".$operaciones->calcularMultiplicacion()."</td>
        <td>".$operaciones->calcularMenor()."</td>
    </table>";
