<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_POST['peso']) || !isset($_POST['altura'])){
        header("Location: imc.php")
        exit();
    }
        $peso=$_POST['peso'];
        $altura=$_POST['altura']
        
        if(!is_numeric($peso) || !is_numeric($altura) || $altura <=0){
            header("Location: imc_formulario.php?=valores_invalidos");
            exit();
        }
        $imc = $peso / ($altura * $altura);
        $imc = round ($imc, 2);
        echo "<h1>Resultado do Cálculo do IMC </h1>";
        echo '<p>Seu IMC é: $imc</p>';
    ?>
</body>
</html> 