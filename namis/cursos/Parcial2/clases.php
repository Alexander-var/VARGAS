<?php
class Biblioteca
{
    private $my;

    function __construct()
    {
        // $this->my = new mysqli("localhost", "root", "", "base1");
        $this->my = new mysqli("localhost","root","","bd_biblioteca");
        if ($this->my->connect_error)
        die("Problemas con la conexión a la base de datos");
    }
    // ==================================================================
    function insertar($id,$nombre)
    {
        $this->my->query("INSERT INTO prestamos(idlibro,nombreprestamo)
        VALUES($id,'$nombre')")or
        die("Problemas en el insert Prestamos.".$this->my->error);
    }
    // =================================================================
    function leerLibross($orden)    // Para la pregunta 3
    {
        $registros=$this->my->query("SELECT * FROM libros
                            $orden")or
        die("Problemas en el select libros no encontrado.".$this->my->error);
        return $registros;
    }
    // =================================================================
    function leerLibros($id)    // Para la pegunta 5
    {
        $registros=$this->my->query("SELECT * FROM libros
                                    WHERE idcarrera = $id")or
        die("Problemas en el select libros no encontrado.".$this->my->error);
        return $registros;
    }
    function leerCarreras()
    {
        $registros = $this->my->query("SELECT * FROM carreras")or
        die("Problemas en el select carreras.".$this->my->error);
        return $registros;
    }
    // 26 Informatica
    // 35 Sistemas
    // ==================================================================
    function actualizarUsuarios($id,$nivel)
    {
        $this->my->query("UPDATE usuarios set nivel = $nivel
                                    WHERE id = $id ")or
        die("Problemas al actualizar Usuarios.".$this->my->error);
    }
    // =================================================================
    function leerUsuarios()
    {
        $registros = $this->my->query("SELECT * FROM usuarios")or
        die("Problemas en el select Usuarios.".$this->my->error);
        return $registros;
    }
    function leerUsuario($user,$contra)
    {
        $registros = $this->my->query("SELECT * FROM usuarios
                    WHERE usuario = '$user' AND
                          password = '$contra'")or
        die("Problemas en el select Usuario Admi or User.".$this->my->error);
        return $registros;
    }
    // =================================================================
    function cerraBaseDeDatos()
    {
        $this->my->close();
    }
}
 ?>
