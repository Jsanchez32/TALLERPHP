<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>4. Ejercicio</h2>

    <form action="ejercicio4.php" method="post">
        <label>Primera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre1">
        <label >Edad</label>
        <input type="text" name="edad1"><br>
        <label>Segunda Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre2">
        <label >Edad</label>
        <input type="text" name="edad2"><br>
        <label>Tercera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre3">
        <label >Edad</label>
        <input type="text" name="edad3">
        <button type="submit">Calcular</button>
    </form>    


</body>
</html>

<?php
    if($_POST){
        if($_POST["edad1"]>$_POST["edad2"]&&$_POST["edad1"]>$_POST["edad3"]){
            echo "La persona mayor es {$_POST["nombre1"]} con una edad de {$_POST["edad1"]}";
        }
        else if($_POST["edad2"]>$_POST["edad1"]&&$_POST["edad2"]>$_POST["edad3"]){
            echo "La persona mayor es {$_POST["nombre2"]} con una edad de {$_POST["edad2"]}";
        }
        else if($_POST["edad3"]>$_POST["edad2"]&&$_POST["edad3"]>$_POST["edad1"]){
            echo "La persona mayor es {$_POST["nombre3"]} con una edad de {$_POST["edad3"]}";
        }
    }





?>