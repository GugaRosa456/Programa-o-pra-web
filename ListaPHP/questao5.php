<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão5</title>
</head>
<body>
<form method="POST">
   <input type="text" name="numMax" required> 
      <input type="text" name="numMin" required> 
     <input type="submit" value="Sortear">
</form>
      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $min = $_POST['numMin'];
    $max = $_POST['numMax'];
    $numero = rand($min, $max);
    echo "número: $numero";
}
      ?>
</body>
</html>