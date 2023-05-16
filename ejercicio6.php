<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>6. Ejercicio</h2>

        <form action="ejercicio6.php" method="post">
        <label>Primera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre1">
        <label >Sexo</label>
        <select name="sexo1" id="">
            <option>Seleccione</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label >Definitiva</label>
        <input type="text" name="definitiva1"><br>

        <label>Segunda Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre2">
        <label >Sexo</label>
        <select name="sexo2" id="">
            <option>Seleccione</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label >Definitiva</label>
        <input type="text" name="definitiva2"><br>

        <label>Tercera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre3">
        <label >Sexo</label>
        <select name="sexo3" id="">
            <option>Seleccione</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label >Definitiva</label>
        <input type="text" name="definitiva3">
        <button type="submit">Calcular</button>
    </form>    
</body>
</html>

<?php 

    $nombre1=$_POST["nombre1"];
    $nombre2=$_POST["nombre2"];
    $nombre3=$_POST["nombre3"];

    $definitiva1=$_POST["definitiva1"];
    $definitiva2=$_POST["definitiva2"];
    $definitiva3=$_POST["definitiva3"];


    $sexo1=$_POST["sexo1"];
    $sexo2=$_POST["sexo2"];
    $sexo3=$_POST["sexo3"];

    $M=0;
    $F=0;

    if($_POST){
        if($definitiva1>$definitiva3){
            if($definitiva1==$definitiva2){
                echo "La personas con nota mas alta son: {$nombre1} y {$nombre2}";
            }
        }
        else if($definitiva1>$definitiva2){
            if($definitiva1==$definitiva3){
                echo "La personas con nota mas alta son: {$nombre1} y {$nombre3}";
            }
        }
        if($definitiva1>$definitiva3 && $definitiva1>$definitiva2){
            echo "La personas con nota mas alta son: {$nombre1}";
        }


        if($definitiva2>$definitiva1){
            if($definitiva2==$definitiva3){
                echo "La personas con nota mas alta son: {$nombre2} y {$nombre3}";
            }
        }
        else if($definitiva2>$definitiva3){
            if($definitiva2==$definitiva1){
                echo "La personas con nota mas alta son: {$nombre2} y {$nombre1}";
            }
        }
        if($definitiva2>$definitiva3 && $definitiva2>$definitiva1){
            echo "La personas con nota mas alta son: {$nombre2}";
        }


        if($definitiva3>$definitiva1){
            if($definitiva3==$definitiva2){
                echo "La personas con nota mas alta son: {$nombre3} y {$nombre2}";
            }
        }
        else if($definitiva3>$definitiva2){
            if($definitiva3==$definitiva1){
                echo "La personas con nota mas alta son: {$nombre3} y {$nombre1}";
            }
        }
        if($definitiva3>$definitiva1 && $definitiva3>$definitiva2){
            echo "La personas con nota mas alta son: {$nombre3}";
        }



        //Menor//

        if($definitiva1<$definitiva3){
            if($definitiva1==$definitiva2){
                echo "La personas con nota mas baja son: {$nombre1} y {$nombre2}";
            }
        }
        else if($definitiva1<$definitiva2){
            if($definitiva1==$definitiva3){
                echo "La personas con nota mas baja son: {$nombre1} y {$nombre3}";
            }
        }
        if($definitiva1<$definitiva3 && $definitiva1<$definitiva2){
            echo "La personas con nota mas baja son: {$nombre1}";
        }


        if($definitiva2<$definitiva1){
            if($definitiva2==$definitiva3){
                echo "La personas con nota mas baja son: {$nombre2} y {$nombre3}";
            }
        }

        if($definitiva2<$definitiva3 && $definitiva2<$definitiva1){
            echo "La personas con nota mas baja son: {$nombre2}";
        }

        if($definitiva3<$definitiva1 && $definitiva3<$definitiva2){
            echo "La personas con nota mas baja son: {$nombre2}";
        }
    


        if($sexo1=="M"){
            $M++;
        }
        else{
            $F++;
        }
        if($sexo2=="M"){
            $M++;
        }
        else{
            $F++;
        }
        if($sexo3=="M"){
            $M++;
        }
        else{
            $F++;
        }


        echo "<br>La cantidad de hombres son: {$M}";
        echo "<br>La cantidad de mujeres es: {$F}";
    }
?>