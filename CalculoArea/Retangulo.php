<?php
    class Retangulo implements Area, Perimetro {
        private $altura;
        private $largura;
        public function __construct($altura, $largura){
            $this->altura = $altura;
            $this->largura = $largura;
        }

        public function calcularArea(){
            return $this->altura * $this->largura;
        }

        public function calcularPerimetro(){
            return $this->altura * 2 + $this->largura * 2;
        }
    }