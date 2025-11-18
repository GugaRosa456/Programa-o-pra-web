<?php 
function connecta_bd(){
    $servername = "localhost";
    $username = "aluno";
    $password = "aluno";
    $dbname = "webti";
    // Criar conexao
    return new PDO("mysql:host=$servername;dbname=$dbname");
}
//connecta_bd();

function cadastra_usuario($nome, $email, $login, $senha){
    $con= connecta_db();
    $smtt =$con->prepare("INSERT INTO usuarios (email, login, senha) VALUES (:nome, :email :login, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':nome', $email);
    $stmt->bindParam(':nome', $login);
    $stmt->bindParam(':nome', $senha);
    return $stmt->execute();
}
//exemplo cadastro
cadastra_usuario("João Silva", "joao", "12345");
?>