<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 7</h2>

    <form action="ejercicio7.php" method="post">
        <label >Nombre</label>
        <input type="text" name="nombre">
        <label >Precio</label>
        <input type="text" name="precio">
        <label >Cantidad</label>
        <input type="text" name="cantidad">
        <button type="submit">Calcular</button>

    </form>



</body>
</html>

<?php

$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$total=$precio*$cantidad;

if($_POST){
    echo "EL precio de los {$cantidad} {$nombre} es: {$total}";

}


?>