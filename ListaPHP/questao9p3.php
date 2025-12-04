<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome = $_GET['Nome'];
$email = $_GET['Email'];
$peso = $_POST['Peso'];
$altura = $_POST['Altura'];
$imc = $peso / ($altura * $altura);
echo "Nome: $nome"; 
echo "Email: $email"; 
echo "Peso: $peso "; 
echo "Altura: $altura "; 
echo "IMC: " . number_format($imc);
?>
</body>
</html>