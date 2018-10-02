<?php
    require 'Tarefa.php';
    require 'ListaDeTarefas.php';

    $tarefa = new Tarefa('Não votar no bolsonaro', 'Isso seria idiota da sua parte', '07/10/2018', 'Não concluída');
    $tarefa1 = new Tarefa('Não votar no bolsonaro', 'Isso seria idiota da sua parte', '07/10/2018', 'Não concluída');
    $tarefas = new ListaDeTarefas();
    $tarefas->adicionarTarefa($tarefa);
    $tarefas->adicionarTarefa($tarefa1);


    echo 'Numero de tarefas'.$tarefas->contarTarefas().PHP_EOL;
?>