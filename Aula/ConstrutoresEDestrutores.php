<?php

require_once('autoload.php');

$ap1 = new ApartamentoDoisDormitorios("Rua Paulista", 2);

$ap2 = new ApartamentoDoisDormitorios("Rua Maria", 4);

echo ApartamentoDoisDormitorio::AREA;

echo($ap1->endereco);
echo('<br>');
echo($ap1->andar);
echo('<br>');

echo($ap2->endereco);
echo('<br>');
echo($ap2->andar);
echo('<br>');




