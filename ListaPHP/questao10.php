<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_Q10.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" class="tela">
   <input type="text" name="numMax" required> 
      <input type="text" name="numMin" required> 
     <input type="submit" value="Imprimir">

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$min = $_POST['numMin'];
$max = $_POST['numMax'];
for($i = $numeros; $i < $max && $i > min; $i++){
    echo "<span> $i </span>";
 }
}
?>
<p>coloquei um for no php, por conta de eu ter aprendido em programação</p>
<p>para pegar determinados numeros de um intervalo de tempo, deve-se usar for</p>
</form>
</body>
</html>