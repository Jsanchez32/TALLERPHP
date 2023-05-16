<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="ejercicio9.php" method="post">
        <label>Primera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre1">
        <label >Salto</label>
        <input type="number" name="salto1"><br>

        <label>Segunda Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre2">
        <label >Salto</label>
        <input type="number" name="salto2"><br>

        <label>Tercera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre3">
        <label >Salto</label>
        <input type="number" name="salto3">
        <button type="submit">Calcular</button>
    </form>    

</body>
</html>

<?php

$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$nombre3=$_POST["nombre3"];

$salto1=$_POST["salto1"];
$salto2=$_POST["salto2"];
$salto3=$_POST["salto3"];

$record=15;

if($_POST){
    if($salto1>$salto3){
        if($salto1==$salto2){
            echo "La personas con la marca mas alta son: {$nombre1} y {$nombre2}";
        }
    }
    else if($salto1>$salto2){
        if($salto1==$salto3){
            echo "La personas con la marca mas alta son: {$nombre1} y {$nombre3}";
        }
    }
    if($salto1>$salto3 && $salto1>$salto2){
        echo "La personas con la marca mas alta son: {$nombre1}";
        if($salto1>$record){
            echo "<br>{$nombre1} supero el record y gano 1M de pesos";
        }   
    }
    



    if($salto2>$salto1){
        if($salto2==$salto3){
            echo "La personas con la marca mas alta son: {$nombre2} y {$nombre3}";
        }
    }
    else if($salto2>$salto3){
        if($salto2==$salto1){
            echo "La personas con la marca mas alta son: {$nombre2} y {$nombre1}";
        }
    }
    if($salto2>$salto3 && $salto2>$salto1){
        echo "La personas con la marca mas alta son: {$nombre2}";
        if($salto2>$record){
            echo "<br>{$nombre2} supero el record y gano 1M de pesos";
        }   
    }


    if($salto3>$salto1){
        if($salto3==$salto2){
            echo "La personas con la marca mas alta son: {$nombre3} y {$nombre2}";
        }
    }
    else if($salto3>$salto2){
        if($salto3==$salto1){
            echo "La personas con la marca mas alta son: {$nombre3} y {$nombre1}";
        }
    }
    if($salto3>$salto1 && $salto3>$salto2){
        echo "La personas con la marca mas alta son: {$nombre3}";
        if($salto3>$record){
            echo "<br>{$nombre3} supero el record y gano 1M de pesos";
        }   
    }
}

?>