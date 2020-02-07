<?php

class Quadrado implements Forma{
    /**
     * Esta Classe tem como funcionalidade calcular atributos
     * de um quadrado
     */
    public function __construct(float $lado){
        $this->lado = $lado;
    }
    public function getArea(): float{
        /**
         * Este metodo calcula a area de uma quadrado
         */
        return pow($this->lado, 2);
    }
}