<?php
function __autoload($class){
    $arquivo = './' . $class . '.php';

    require_once($arquivo);

}
