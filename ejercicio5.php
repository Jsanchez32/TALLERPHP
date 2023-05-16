<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>5. Ejercicio</h2>

<form action="ejercicio5.php" method="post">
    <label >Numero 1</label>
    <input type="text" name="numero1">
    <label >Numero 2</label>
    <input type="text" name="numero2">
    <button type="submit">Calcular</button>
</form>    
</body>
</html>


<?php

    if($_POST){
        $numero1=$_POST["numero1"];
        $numero2=$_POST["numero2"];

        if($numero1>$numero2){
            $suma=$numero1+$numero2;
            $diferencia=$numero1-$numero2;
            echo "La suma es : {$suma}<br>";
            echo "La diferencia es: {$diferencia}";
        }
        else{
            $producto=$numero1%$numero2;
            $divicion=$numero2/$numero1;
            echo "El producto es : {$producto}<br>";
            echo "La divicion es: {$divicion}";
        }
    }




?>