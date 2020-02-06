<?php

class MinhaClasse{
    public static $atributo = 'Atributo';

    public function valor(){
        return self::$atributo;
    }
}

echo MinhaClasse::$atributo;