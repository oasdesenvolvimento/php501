<?php
//criar uma classe que possua um metodo chamado getItens
//Que retorna uma string falando "Retornando itens pela classe
//__class__"

namespace Produto;

class Estoque
{
    public function getItens()
    {
        return "retornando intens pela classe" . __CLASS__;
    }
}

$estoque = new Estoque;
echo $estoque->getItens;