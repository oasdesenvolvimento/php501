<?php

class Comer
{
    public function __construct(bool $vegano)
    {
        $this->vegano = $vegano;
    }
    public function churrasco()
    {
        if ($this->vegano) {
            // echo 'Não como carne, vim pra fazer média';
            throw new Exception('Eu nunca iria em um churrasco');
        } else {
            echo 'Estou comendo todas as carnes possiveis';
        }
    }
}

$vegano = new Comer(false);

try {
    $vegano->churrasco();
} catch (̣\Exception $ex) {
    echo 'Vegano não compareceu ao churrasco';
    echo '<br>';
    // echo $ex;
    // die('Deu certo não amigo');
} finally {
    echo 'Todos se divertem';
}
