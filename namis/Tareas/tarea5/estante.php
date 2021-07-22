<?php
   class estante{
       private $fila1 = array();
       private $fila2 = array();
       private $fila3 = array();
       private $tope1;
       private $tope2;
       private $tope3;
       private $max;

       function __construct($ma){
           $this->max=$ma;
           $this->tope1=0;
           $this->tope2=0;
           $this->tope3=0;
        }
        function incertarlibro($elemento){
            if ($this->tope1-1==$this->max)
		{
			echo "los libros  estan llenos";
		}
		else
		{
			$this->elementos[$this->tope1]=$elemento;
			$this->tope1++;
		}

        }
        function eliminarlibro($fila1){
            if ($this->tope1==0)
		{
			return "no hay libros para elimiar ";
		}
		else
		{
			$this->tope1--;
			$aux= $this->elementos[$this->tope1];
			
			return $aux;
		}

        }
        function mostrar($fila1){
            for ($i=0; $i <$this->tope ; $i++) { 
                echo $this->elementos[$i]."<br>";
               }

        }
        function mostrararmario(){
            for ($i=0; $i <$this->tope ; $i++) { 
                echo $this->elementos[$i]."<br>";
               }

        }
        
   }
   
?>
