<?php

class SmartPhone
{
    public function ligar()
    {
        echo 'Aló';
    }
}

class SmartWatch
{
    public function verHora()
    {
        echo 'Agora são 22:00';
    }
}

class Pc
{
    public function ligar()
    {

    }
}

class Xiaomi
{
    public static function criar(string $produto)
    {
        $claas = ucfirst($produto);
        return new $claas;
    }
}

$smartphone = Xiaomi::criar('SmartPhone');
$smartphone->ligar();