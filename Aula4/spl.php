<?php

class Colecao implements Traversable


 {
    protected $itens = [];

    public function __construct(array $itens){
        $this->itens = $itens;
    }

    public function count(){
        return count($this->itens);
    }
}

$colecao = new Colecao(['Oscar', 'Rodrigo']);

echo count($colecao);