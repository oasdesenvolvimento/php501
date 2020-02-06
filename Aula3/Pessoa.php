<?php

class Pessoa{

    public function __construct(
        string $nome,
        string $sobrenome,
        string $sexo,
        string $dataNascimento,
        string $naturalidade
    ){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
        $this->naturalidade = $naturalidade;
    }
    public function Apresentar(){
        return "$this->nome $this->sobrenome";
    }
}