<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão7</title>
</head>
<body>
    
<form method="POST">
     <input type="text" name="numero" required> 
     <input type="submit" value="Calcular">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    function Tabuada($numero){
        echo $numero * 1; <br>
        echo $numero * 2; <br>
        echo $numero * 3;  <br>
        echo $numero * 4;  <br>
        echo $numero * 5; <br>
        echo $numero * 6; <br>
        echo $numero * 7; <br>
        echo $numero * 8; <br>
        echo $numero * 9; <br>
        echo $numero * 10; <br>
    }
    Tabuada($numero); 
}
?>
</body>
</html>
