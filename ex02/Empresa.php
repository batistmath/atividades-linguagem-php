<?php
    class Empresa{
        public $vendas;

        public function imprimir(){
            echo "Vendas";
            for ($i=0; $i<count($this->vendas); $i++){
                echo "<br>" .
                "ID: " . $this->vendas[$i]->id .
                "<br>" .
                "Finalidade: " . $this->vendas[$i]->finalidade .
                "<br>" . 
                "Paga: " . $this->vendas[$i]->paga .
                "<br>" . "<br>";
            }
        }
    }