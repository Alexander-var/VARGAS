<?php 
class cuadrado
{
	private $cadena;
	public function __construct($valor)
	{
		$this->cadena=$valor;
	}
	public function dibujar()
	{
		echo $this->cadena."<br>";
		$l=strlen($this->cadena);
		for ($i=1;$i<$l-1;$i++)
		{
			echo substr($this->cadena, $i,1);
			for ($j=0;$j<$l;$j++)
				echo "&nbsp;";
			echo substr($this->cadena,$l-$i-1,1)."<br>";
		}
		$invertida="";
		for ($i=0;$i<$l;$i++)
		{
			$invertida=$this->cadena[$i].$invertida;
		}
		echo $invertida."<br>";
	}
}
$ob1=new cuadrado("tecno");
$ob1->dibujar();
$ob2=new cuadrado("ciencias");
$ob2->dibujar();