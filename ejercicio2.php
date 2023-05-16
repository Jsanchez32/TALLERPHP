<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>2. Ejercicio</h2>

    <form action="ejercicio2.php" method="post">
        <label >Inserte el numero</label>
        <input type="text" name="numero">
        <button type="submit">Calcular</button>
    </form>

</body>
</html>

<?php

    if($_POST){
        $par= $_POST["numero"]%2;
        if($par==0){
            echo"El numero es par";
        }
        else{
            echo "El numero es impar";
        }
        if($_POST["numero"]>9){
            echo "<br>El numero es mayor a 10";
        }
        else{
            echo "<br>El numero es menor a 10";
        }
    }




?>