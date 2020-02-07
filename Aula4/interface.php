<?php

interface Carro{
    public function acelerar();
    public function freiar();
    public function re();
    public function buzinar();

    const RODAS = 4;
}

class Fusca implements Carro{

    public function acelerar(){
        return "Trec Trec";
    }
    public function freiar(){
        return "Freiar";
    }
    public function re(){
        return "Re";
    }
    public function buzinar(){
        return "BI BI";
    }
    public function abrirPortas(){
        return "Abrir porta";
    }

}
$fusca = new Fusca();
echo $fusca->acelerar();
echo'<br>';
echo $fusca->freiar();
echo'<br>';
echo $fusca->abrirPortas();