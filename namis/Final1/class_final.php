<?php
    class __final{
        private $n,$cadena;
        public function __construct($n,$cadena){
            $this->n=$n;
            $this->cadena=$cadena;
        }

        public function CalcularSumatoria(){
            $sumatoria=0;
            for ($i=1; $i <= $this->n; $i++) { 
                echo $i;
                if($i <= $this->n-1)
                echo "+";
                if($i == $this->n)
                echo "=";
             $sumatoria = $sumatoria + $i;
            }
            return $sumatoria;
        }

        public function CalcularDiagonal(){
            $tamanio = strlen($this->cadena);//logitud de la cadena 
            $cad = $this->cadena; // cadena 
            echo '
            <table class="table table-bordered border-primary">';
            for ($i=0; $i < $tamanio; $i++) { 
                echo '
                <tr>';
                for ($j=0; $j < $tamanio; $j++) { 
                    if($j != $tamanio){
                        if($i == $j){
                            echo '
                            <td>'.$cad[$i].'</td>';
                        }else{
                            echo '
                            <td> </td>';
                        }
                    }
                }
                echo '
                </tr>';
            }
            echo'
            </table>
            ';

        }
    }
?>

