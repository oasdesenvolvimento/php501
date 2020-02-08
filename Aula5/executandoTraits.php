<?php

require "funcionalidades.php";

class Calculadora
{
    use OperacoesComplexas, Operacoes, Formatar {
        Operacoes::somar insteadof OperacoesComplexas;
        OperacoesComplexas::somar as somarLista;
    }
}

class CalculadoraSimples
{
    use Operacoes;
}

$teste = array(
    "1",
    "2"
);
var_dump($teste);

$calculo = new Calculadora;

echo $calculo->somar(1, 2);
$calculo->quebrarlinha();
echo $calculo->subtrair(2, 3);
$calculo->quebrarlinha();
echo $calculo->multiplicar(2, 3);
$calculo->quebrarlinha();
echo $calculo->dividir(2, 3);
$calculo->quebrarlinha();
echo $calculo->elevar(2, 3);
$calculo->quebrarlinha();
echo $calculo->raizQuadrada(2);
$calculo->quebrarlinha();
echo $calculo->somarLista($teste);
