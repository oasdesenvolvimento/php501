<?php

trait Operacoes{
    public function somar($n1, $n2): float{
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2): float{
        return $n1 - $n2;
    }
    public function dividir($n1, $n2): float{
        return $n1 / $n2;
    }
    public function multiplicar($n1, $n2): float{
        return $n1 * $n2;
    }
}

trait OperacoesComplexas{
    public function somar(array $numeros): float{
        return array_sum($numeros);
    }
    public function elevar($enum, $expo) : float{
        return pow($enum, $expo);
    }
    public function raizQuadrada($enum) : float{
        return sqrt($enum);
    }
}

trait Formatar{
    public function quebrarlinha($numeroDelinhas = 1){
        for ($i=1; $i <= $numeroDelinhas; $i++) { 
            echo('<br>');
        }
    }
}