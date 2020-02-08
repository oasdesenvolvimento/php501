<?php

trait Funcionalidade
{
    public function buzinar()
    {
        return 'Bi Bi';
    }
    public function desligar()
    {
        return 'Desligando';
    }
}

class Carro
{
    
    public function __construct(string $marca, string $cor, string $ano)
    {
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function acelerar()
    {
        return "A ". $this->marca . " faz frummmm";
    }
    public function freiar()
    {
        return 'Freiar';
    }
}

$teste = new Carro("BMW", "Branco", "2021");

echo $teste->acelerar();
