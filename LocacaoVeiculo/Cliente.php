<?php

    class Cliente {
        private $nome;
        private $sobrenome;

        function __construct($nome, $sobrenome) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }
    }
?>