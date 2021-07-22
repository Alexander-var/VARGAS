<?php
class _operaciones
{
    private $a, $b, $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calcularMultiplicacion()
    {
        $mul = $this->a * $this->b * $this->c;
        return $mul;
    }
    public function calcularMenor()
    {
        if (($this->a < $this->b) && ($this->a < $this->c)) {
            return $this->a;
        } else {
            if (($this->b < $this->a) && ($this->b < $this->c)) {
                return $this->b;
            } else {
                return $this->c;
            }
        }
    }
    public function mostrarCalculos(){
        
    }
}
?>
