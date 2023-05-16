<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="factura.php" method="post">
    <select name="monedas" id="">
        <option value="">Seleccione</option>
        <option value="bitcoin">Bitcoin</option>
        <option value="ethereum">Ethereum</option>
        <option value="solana">Solana</option>
    </select>
    <label>Cantidad Cipto</label>
    <input type="number" name="cantidad">

    <label>Precio Cipto</label>
    <input type="number" name="precio">

    <button type="submit">Comprar</button>
    </form>
</body>
</html>


<?php 
    if($_POST){
        
        $total= $_POST["precio"]*$_POST["cantidad"];
    
        echo "El valor de su {$_POST["monedas"]} es {$total}$";
    }





?>