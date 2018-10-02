<?php
    class ListaDeTarefas {

        private $tarefas;

        public function adicionarTarefa($tarefa)
        {
            $this->tarefas[] = $tarefa;
        }

        public function contarTarefas(){
            return count($this->tarefas);
        }
    }