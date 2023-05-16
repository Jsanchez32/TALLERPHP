<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>1. Ejercicio</h2>
    <p>Notas estudiantes</p>
    <form action="ejercicio1.php" method="post">
        <label>Nota 1</label>
        <input type="text" name="nota1">
        <label>Nota 2</label>
        <input type="text" name="nota2">
        <label>Nota 3</label>
        <input type="text" name="nota3">
        <button type=submit>Calcular</button>
    </form>
</body>
</html>

<?php
    if($_POST){
        $suma= $_POST["nota1"]+$_POST["nota2"]+$_POST["nota3"];
        intval($suma);
        $definitiva= $suma/3;
        echo "Su definitiva es: {$definitiva}<br>";
        if($definitiva<3.9){
            echo "Estudie";
        }
        else{
            echo "Becado";
        }
    }



?>