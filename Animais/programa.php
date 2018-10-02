<?php
    require 'Aves.php';
    require 'AvesQueNadam.php';
    require 'AvesQueVoam.php';
    require 'Papagaio.php';
    require 'Pelicano.php';
    require 'Pinguim.php';

    $loroJose = new Papagaio();
    $pelicano = new Pelicano();
    $pinguim = new Pinguim();

    $arrayDeAves = [];

    $arrayDeAves[] = $loroJose;
    $arrayDeAves[] = $pelicano;
    $arrayDeAves[] = $pinguim;


    foreach ($arrayDeAves as $ave) {
       echo $ave->voar();
       echo "<br><br>";
    }