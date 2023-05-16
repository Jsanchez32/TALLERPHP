<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio8.php" method="post">
        <label >Lado Cuadrado</label>
        <input type="text" name="lado">
        <label >Base Rectangulo</label>
        <input type="text" name="base">
        <label >Altura Rectangulo</label>
        <input type="text" name="altura">
        <button type="submit">Calcular</button>

    </form>
</body>
</html>

<?php

$perimetro=$_POST["lado"]*4;
$area=$_POST["base"]*$_POST["altura"];

if($_POST){
    echo "El perimetro del cuadrado es: {$perimetro}<br>";
    echo "El area del rectangulo es: {$area}";
}






?>