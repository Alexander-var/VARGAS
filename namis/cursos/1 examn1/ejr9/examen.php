<?php 
class examen 
{
	private  string $n;
	private $a;
	private $b;
	private $c;

	function __construct($n,$a,$b,$c)
	{
		$this->$n=$n;
		$this->$a=$a;
        $this->$b=$b;
        $this->$c=$c;

	}
	public function calcularfionsi($n)
	{
        if ($n==1 or $n==0)
		return $n;
	    else 
		return fibonacci($n-2)+fibonacci($n-1);
	
	}
	public function calcularmayor($a,$b,$c)
	{
        if($a>$b){
            if($a>$c)
                return $a;
        }else{

            if($b>$c){
                return $b;
            }else{
                if($c>$a){

                  return $c;
                }
            }
        }
	
	}
	public function piramide($n){

        



    }
}
?>