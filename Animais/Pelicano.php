<?php
    class Pelicano extends Ave implements AvesQueVoam, AvesQueNadam {
        public function voar(){
            echo 'eu sou um pelicano que voa';
        }

        public function nadar(){
            echo 'eu estou nadando';
        }
    }