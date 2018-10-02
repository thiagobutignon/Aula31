<?php
    class Tarefa {
        private $titulo;
        private $descricao;
        private $prazo;
        private $status;

        public function __construct($titulo, $descricao, $prazo, $status){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->prazo = $prazo;
            $this->status = false;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getPrazo(){
            return $this->prazo;
        }

        public function getStatus(){
            return $this->status;
        }
    }
?>