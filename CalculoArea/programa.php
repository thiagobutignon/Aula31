<?php
    require 'Area.php';
    require 'Perimetro.php';
    require 'Retangulo.php';
 

    $retangulo = new Retangulo(10,2);

    $area = $retangulo->calcularArea();
    $perimetro = $retangulo->calcularPerimetro();

    echo "A área do retangulo é $area";
    echo "<br><br>";
    echo "O perimetro do retangulo é $perimetro";

?>