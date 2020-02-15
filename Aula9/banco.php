<?php
$servidor='mysql:host=192.168.205.123;dbname=curso';
$usuario='root';
$senha='4linux';
echo'<pre>';

try{
    $client = new PDO($servidor, $usuario, $senha);

    //defindo classe de erro PDO
    $client->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nome ='Oscar';
    $statement = $client->prepare('SELECT * FROM alunos WHERE nome like :nome');
    
    $statement->bindParam(':nome', $nome);
    $statement->execute();
    $result = $statement->fetchAll();
    var_dump($result);
    // foreach($client->query('SELECT * FROM alunos') as $aluno){
    //     print_r($aluno);
    //     echo '<br>';
    //     echo $aluno[0];
    //     echo '<br>';

    // };
    // $client->exec("INSERT INTO alunos (nome, sobrenome, email) VALUES ('Oscar', 'Teste2', 'teste@teste.com.br')");
}catch(PDOException $ex){
    echo"Erro com o banco de dados: {$ex}";
}catch(Exception $ex){
    echo $ex;
}finally{
    unset($client);
}