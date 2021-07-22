<?php
    session_start();
    include('clases.php');
    $user = $_POST['usuario'];
    $pass = $_POST['pass'];

    $usuario = new Biblioteca();
    $registro = $usuario->leerUsuario($user,$pass);
    if ($reg = $registro->fetch_array()) {
        echo "<p>Autenticado Correctamente</p>";
        $_SESSION['nivel']=$reg['nivel'];
        $_SESSION['usuario']=$user;
    } else {
        echo "No autenticado";
    }

?>