<?php

class MetodosMagicos
{
    public $nome;
    /**
     * DocString - Documentation do seu modeulo
     * Uma boa parte dos métodos magicos do php
     * @param string $nome String para renomear o objeto
     */
    //Declaracoes de variaveis

    function __construct($nome)
    {
        //Tem como funcionalidade executar codigo na hora dacrição
        //do objeto
        $this->nome = $nome;
    }
    /**
     * Funcão destrutora
     * Executada na hora em que meu objeto for destruido
     */
    function __destruct()
    {
        echo 'Adeus mundo cruel';
    }
    /**
     * Funcçao Clone
     * Executada ao clonar um objeto
     */
    function __clone()
    {
        echo 'Objeto sendo clonado';
    }
    /**
     * Método toString
     * Usado na hora em que o objeto tenta ser chamado como string
     */
    function __toString()
    {
        //retorno obrigatorio
        return 'Mudado para string';
    }

    /**
     * Quando tentamos chamar o objeto como funcao
     */
    function __invoke()
    {
        echo 'Este objeto nao pode ser chamado como funcao';
        //obj
    }

    /**
     * sleep
     * Método usado quando serializamos um objeto
     */
    function __sleep()
    {
        //Parametros para serem serelizados
        echo 'Indo dormir';
        return ['nome'];
    }

    /**
     * WakeUp
     * Método usado quando deserializarmos um objeto
     */
    function __wakeup()
    {
        echo 'Acordando estou';
        //$obj = unserialize
    }
    /**
     * set
     * Quando tentamos instanciar um valor de variável
     */
    function __set($propriedade, $valor)
    {
        $this->sobrenome = $valor;
        echo "Setando o valor $valor para o atributo $propriedade";
    }
    /**
     * get
     * Chamado quando tentamos acessar um valor de propriedade
     */
    function __get($parametros)
    {
        echo "Tentamos acessar o valor $parametros";
    }
    /**
     * call
     * Quando tentamos acessar um método da classe
     */
    function __call($metodo, $argumentos)
    {
        echo "tentando acessar a método $metodo, com os parametros"
            . implode($argumentos);
    }
    /**
     * callStatic
     * Quando tentamos acessar um método da classe
     */
    public static function __callStatic($metodo, $arguments)
    {
        echo "tentando acessar o método estático $metodo, com os parametros"
            . implode($arguments);
    }
    /**
     * isset
     * Quando usamos a função isset para verificar a existencia do valor em um atributo
     */
    function __isset($name)
    {
        echo "Tentando verificar a existência de $name";
        // isset($obj->arg);
    }
}
