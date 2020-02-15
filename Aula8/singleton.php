<?php
class Database
{
    public static $connection;

    public function __construct()
    {
        echo 'Conexão realizada';
    }
    public static function Connect()
    {
        if (!isset(self::$connection)) {
            self::$connection = new Database;
            return self::$connection;
        } else {
            return 'Já existe conexão';
        }
    }
    public static function query($query)
    {
        echo $query;
    }
}

$client  = Database::Connect();
$teste = Database::Connect();
$client->query('Oscar');
$client->query('Teste');
