<?php
class persona 
{
   public $nombre;
   public $apellidos;
   function getNombreCompleto()
   {
       return $this->$nombre." ".$this->$apellidos;   ;
   }
}
?>
