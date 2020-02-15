<?php

include "MetodosMagicos.php";

//Construct
$objeto = new MetodosMagicos('Oscar');

//Clone
$obj2 = clone($objeto);
echo '<br>';

//To string
echo $objeto;
echo'<br>';

//Invoke
$objeto();
echo '<br>';

//sleep
$objeto = serialize($objeto);
echo $objeto;
echo '<br>';

//wake up
$objeto = unserialize($objeto);
echo '<br>';

//Set
$objeto->sobrenome = "Silva";
echo '<br>';
echo $objeto->sobrenome;
echo '<br>';

//Get
echo $objeto->nome;
echo '<br>';

//Call
$objeto->idade(' Dias');
echo '<br>';

//CallStatic
MetodosMagicos::idade('dias', 'meses', 'ano');
echo '<br>';

//isset
$arroz = 'Carboidrato';
echo isset($arroz);
echo '<br>';

//Destrudor
unset($objeto);
echo '<br>';