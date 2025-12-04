<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST">
     <input type="text" name="Lado1" required> 
      <input type="text" name="Lado2" required> 
       <input type="text" name="Lado3" required> 
     <input type="submit" value="calcular">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$lado1 = $_POST['Lado1'];
$lado2 = $_POST['Lado2'];
$lado3 = $_POST['Lado3'];
if($lado1 == $lado2 && $lado2 == $lado3 && $lado3 == $lado1){
echo "o seu triangula é Equilátero";
}
elseif(($lado1 == $lado2 && $lado1 != $lado3) || ($lado1 == $lado3 && $lado1 != $lado2) || ($lado2 == $lado3 && $lado1 != $lado2) ){
echo "o seu triangulo é Isósceles";
}
else{
echo "o seu triangulo é Escaleno";
}

}
?>
<p> sites utilizados</p>
https://www.php.net/manual/en/control-structures.elseif.php
https://moodle.ifsc.edu.br/pluginfile.php/624240/mod_resource/content/0/Aula%207%20-%20php%201%20operadores.pdf

</body>
</html>