<?php 
class Operaciones{
    private $a;
    private $b;
    private $c;

    //CONTRUCTOR
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->a = $b;
        $this->a = $c;
    }


    public function calcularmultiplicasion(){
        $multi =1;
        $multi=$this->a*$this->b*$this->c;
        return $multi; 

    }

} 
$operar = new Operaciones(2,5,7);    // INSTANCIAMOS LA CLASE CUADRADO
$operar->calcularmultiplicasion();
?>
