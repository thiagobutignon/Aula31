<?php
    require 'Cliente.php';
    require 'Locacao.php';
    require 'Veiculo.php';
    require 'VeiculoDeLuxo.php';
    
    $cliente = new Cliente ('Thiago', 'Butignon');


    $audi = new VeiculoDeLuxo('ABC-1234', 30);

    $locacao = new Locacao($cliente);


    var_dump($cliente);
    echo "<br><br>";
    var_dump($audi);
    echo "<br><br>";
    var_dump($locacao);
    echo "<br><br>";
    echo $locacao-> calcularDiaria($audi, 4);
?>
