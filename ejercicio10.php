<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        <label >Numero1</label> 
        <input type="number" name="n1">
        <label >Numero2</label> 
        <input type="number" name="n2">
        <label >Numero3</label> 
        <input type="number" name="n3">
        <button type="submit">Calcular</button>
    </form>    
</body>
</html>

<?php

    $numero1=$_POST["n1"];
    $numero2=$_POST["n2"];
    $numero3=$_POST["n3"];




    $suma=$numero1+$numero2+$numero3;
    $promedio=$suma/3;

    if($_POST){
        if($numero1>$numero2&&$numero1>$numero3){
            echo "EL numero mayor es: {$numero1}<br>";
        }
    
    
        else if($numero2>$numero1&&$numero2>$numero3){
            echo "EL numero mayor es: {$numero2}<br>";
        }
    
    
        else if($numero3>$numero2&&$numero3>$numero1){
            echo "EL numero mayor es: {$numero3}<br>";
        }
    
    
        if($numero1<$numero2&&$numero1<$numero3){
            echo "EL numero menor es: {$numero1}";
        }
    
    
        if($numero2<$numero2&&$numero2<$numero3){
            echo "EL numero menor es: {$numero2}";
        }
    
    
        if($numero3<$numero2&&$numero3<$numero3){
            echo "EL numero menor es: {$numero3}";
        }

        echo "<br>La suma de los numero es: {$suma}";
        echo "<br>El promedio de los numero es: {$promedio}";
        echo "<br>La cantidad de numero es: 3";
    }

    



?>