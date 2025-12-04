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
        echo $numero * 1;
        echo $numero * 2; 
        echo $numero * 3; 
        echo $numero * 4;  
        echo $numero * 5; 
        echo $numero * 6; 
        echo $numero * 7; 
        echo $numero * 8; 
        echo $numero * 9; 
        echo $numero * 10; 
    }
    Tabuada($numero); 
}
?>
</body>
</html>
