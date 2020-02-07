<?php

// $obj = new class{
//     function apresentar(){
//         echo "Oi";
//     }
// };

// $obj->apresentar();

//Funcao anonima para calculos matematicos

var_dump((new class(10, 20){
    private $resultado;
    public function __construct($num, $num2){
        $this->num = $num;
        $this->num2 = $num2;
        $this->resultado = $num + $num2;
    }
    public function dividir(){
        return $this->num / $this->num2;
    }
})->dividir());

var_dump((new class("Oscar", "Augusto"){
    public function __construct($nome, $sobreNome){
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->resultado = $nome . $sobreNome;
    }
    public function conctNome(){
        return $this->nome . $this->sobreNome;
    }
})->conctNome());
