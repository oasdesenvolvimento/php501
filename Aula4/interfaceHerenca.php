<?php

interface Humano{
    const SAUDAVEL = true;
    public function comer();
}
interface Funcionario extends Humano{
    public function atenderCliente();
}
interface Desnvolvedor extends Humano, Funcionario{
    public function desenvolver();
}

class MultiTarefas implements Desnvolvedor{
    public function atenderCliente(){
        return 'Alo';
    }
    public function desenvolver(){
        return "tiktiktiktiktiktik";
    }
    public function comer(){
        return 'clack';
    }
}

var_dump(Humano::SAUDAVEL);
echo '<br>';
$teste = new MultiTarefas();
echo $teste->desenvolver();