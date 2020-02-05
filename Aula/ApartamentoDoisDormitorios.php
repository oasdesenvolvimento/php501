<?php

class ApartamentoDoisDormitorios{
    //Atributos de objeto
    public $quartos = 2;
    public $paredes = 5;
    public $janelas = 1;
    public $piso = 'Porcelanato';
    public $preco = 180000;
    const AREA = 35;
    const BANHEIRO = 35;
    const ELETRICIDADE = 35;

    //Metodos da objeto
    public function Abrigar(){
        echo('Abrigando' . '<br>');
    }
    public function __clone(){
        echo('clonando' . '<br>');
    }
    public function __destruct(){
        echo('destruindo'.  '<br>');
    }
    public function __construct(string $endereco, int $andar = 1){
        $this->andar = $andar;
        $this->endereco = $endereco;
        echo('construindo' . '<br>' );
    }
    public function get_andar(){
        echo $this->andar;
    }
}

//Acessando atributos

// $ApartamentoVergueiro = new ApartamentoDoisDormitorios();
// $ApartamentoVergueiro->tv = true;
// $ApartamentoVergueiro->Abrigar();

// echo('<br>');

// $AvenidaPaulista = new ApartamentoDoisDormitorios();

// echo ($ApartamentoVergueiro->piso. '<br>');
// var_dump($ApartamentoVergueiro->tv);
// echo('<br>');
// echo ($ApartamentoVergueiro->andar. '<br>');

//Vendo caracteristicas do meu objeto
// var_dump($AvenidaPaulista);