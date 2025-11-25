<?php 
function connecta_bd(){
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "bd";
    // Criar conexao
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
//connecta_bd();

function cadastra_usuario($nome, $login, $senha){
    $con= connecta_bd();
    $stmt =$con->prepare("INSERT INTO usuarios ( nome, login, senha) VALUES (:nome, :login, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    return $stmt->execute();
}
//exemplo cadastro
cadastra_usuario("João Silva", "joao", "12345");

function delete_usuario($id){
$con= connecta_bd();
$stmt =$con->prepare("DELETE FROM usuarios WHERE id = :id");
$stmt->bindParam(':id', $id);
return $stmt->execute();
}
//delete_usuario(1); 
function update_usuario ($id, $nome, $login, $senha){
    $con= connecta_bd();
}
?>