<?php

class MinhaExecao extends Exception
{
    public function __construct($message, $code=0, Exception $previus = null)
    {
        parent::__construct($message, $code, $previus);
    }
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
    public function customFunction()
    {
        echo 'Uma funcao especifica desse tipo de excecao';
    }
}
