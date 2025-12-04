<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão6</title>
</head>
<body>
        
<form method="POST">
    <input type="text" name="numero" required> 
     <input type="submit" value="Calcular">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero = $_POST['numero'];
  if($numero % 2 == 0){
    echo "seu numero é par";
  }
  else{
    echo "seu numero é impar";
  }
}
?>

<p>site que utilizei: https://cursos.alura.com.br/forum/topico-duvida-verificacao-de-n-par-para-n-decimais-316309</p>
</body>
</html>