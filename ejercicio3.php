<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>3. Ejercicio</h2>

<form action="ejercicio3.php" method="post">
        <label >Resistencia</label>
        <input type="text" name="resistencia">
        <label >Intensidad</label>
        <input type="text" name="intensidad">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>

<?php

    if($_POST){
        $voltaje= $_POST["resistencia"]*$_POST["intensidad"];

        echo "El voltaje es: {$voltaje}";
    }


?>