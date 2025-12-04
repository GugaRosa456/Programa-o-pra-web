<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão8</title>
</head>
<body>
    <form method="POST">
     <input type="text" name="String" required> 
     <input type="submit" value="Informar">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
%String = $_POST['String'];
}
<p>não concluida, a unica da lista.</p>
?>
</body>
</html>