<?php

    class Locacao {
        private $cliente;
        
        public function __construct($clientex){
            $this->cliente = $clientex;
        }

        public function calcularDiaria($umVeiculoQualquer, $qtdDias) {
            return $qtdDias * $umVeiculoQualquer -> getValorDiaria();
        }
    }

?>