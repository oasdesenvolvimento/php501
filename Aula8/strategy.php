<?php

interface ISaida
{
    public function carrega(array $dados);
}

class ArraySerealizadoSaida implements ISaida
{
    public function carrega(array $dados)
    {
        return serialize($dados);
    }
}

class JsonSaida implements ISaida
{
    public function carrega(array $dados) : string 
    {
        return json_encode($dados);
    }
}

class ArraySaida implements ISaida
{
    public function carrega(array $dados) : array
    {
        return $dados;
    }
}

class XmlSaida implements ISaida
{
    public function carrega(array $dados) : string
    {
        $xml = new SimpleXMLElement("<root/>");
        array_walk_recursive($dados,array($xml, 'addChild'));
        return $xml->asXML();
    }
}

class ClientApp
{
    private $saida;

    public function setSaida(ISaida $tipoSaida)
    {
        $this->saida = $tipoSaida;
    }
    public function cerragaSaida(Array $dados)
    {
        return $this->saida->carrega($dados);
    }
}



$meusDados = [
    'Nome' => 'Oscar',
    'Email' => 'oscar-augusto83@hotmail.com',
    'idade' => '24'
];

$cliente = new ClientApp();

$cliente->setSaida(new ArraySerealizadoSaida);
print_r($cliente->cerragaSaida($meusDados));