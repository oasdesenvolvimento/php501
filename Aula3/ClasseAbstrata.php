<?php declare(strict_types=1);

abstract class Carro{
    abstract public function acelerar() : string;
    abstract public function freiar() : string;
    abstract public function abrirPortas() : string;

    public function buzinar(){
        echo "BI BI BI";
    }
}
class Fusca extends Carro{
    public function acelerar() : string{
        return 'Vrum Vrum';
    }
    public function freiar(): string{
        return 'Freiando';
    }
    public function abrirPortas() : string{
        return 'Abrindo';
    }
}
$carro = new Fusca();
echo $carro->freiar();