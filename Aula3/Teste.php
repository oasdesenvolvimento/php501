<?php

require_once "autoload.php";

$pessoa = new Pessoa("Oscar", "Augusto", "Masculino", "10/07/1995", "Brasileiro");

echo($pessoa->Apresentar());

echo('<br>');

$cliente = new Cliente("Camila", "Mota", "Feminino", "10/07/1995", "Brasileira", "47712395");

$cliente->Comprar();

echo($cliente->Apresentar());

echo('<br>');

echo($cliente->RG);

function printProperty(){
    echo $this->public;
    echo $this->protected;
    echo $this->private;
}


// $teste = new MinhaClasse();
// echo($teste->public);
// echo($teste->protected);
// echo($teste->private);
