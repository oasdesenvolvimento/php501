<?php

class Cliente extends Pessoa{

    final public function __construct(
        string $nome,
        string $sobrenome,
        string $sexo,
        string $dataNascimento,
        string $naturalidade,
        string $RG
    )
    {
        parent::__construct(
            $nome,
            $sobrenome,
            $sexo,
            $dataNascimento,
            $naturalidade
        );
        $this->RG = $RG;
    }

    function Comprar(){
        echo('Estou gastando muito dinheiro' . '<br>');
    }
    public function apresentar(){
        $retorno = parent::apresentar();
        return 'Eu sou o cliente ' . $retorno;
    }

}