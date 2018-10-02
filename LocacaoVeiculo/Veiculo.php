<?php
    abstract class Veiculo {
        private $placa;
        private $valorDiaria;
       
        public function __construct($placax, $valorDiaria){
            $this->placa = $placax;
            $this->valorDiaria = $valorDiaria;
        }
        
        public function getValorDiaria()
        {
            return $this->valorDiaria;
        }

        private function getPlaca()
        {
            return $this->placa;
        }
    }    
?>