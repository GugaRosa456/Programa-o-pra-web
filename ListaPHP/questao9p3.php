<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);
echo "Nome: $nome"; 
echo "Email: $email"; 
echo "Peso: $peso "; 
echo "Altura: $altura "; 
echo "IMC: " . number_format($imc);
?>
</body>
</html>