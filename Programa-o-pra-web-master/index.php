<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minha pagina HTML 
    <?php
     echo "<br>"."Olá Mundão perdido!<BR>";
     $nome = "Romulo Benica";
     echo $nome."<BR>";
    ?>
    <h2> Exemplo tipo de dados PHP</h2>
    <?php
    $a = 5;
    $b = 7;
    echo "<p>".$a+$b."</p>";
    ?>
     <p><?php echo $a+$b ?></p>
    <h2>Operador ternario</h2>
    <?php
    $nota=9;
    $situacao = $nota >= 6 ? 'aprovado' : 'reprovada';
    echo $situacao;
    ?>
    <h2> while</h2>
    <?php 
     $i = 0;
     while ($i<10){
        $i++;
        echo "i=".$i." - ";
     } 
    ?>
</body>
</html>