<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>"El user es Juan_Sanchez y la contraseña 1"</p>
    <form action="login.php" method="POST">
        <label>User</label>
        <input type="text" name="user">
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit" value=Enviar>Login</button>
    </form>

</body>
</html>

<?php

    if($_POST["user"]=="Juan_Sanchez" && $_POST["password"]=="1"){
        header("Location: ejercicios.php");
        die();
    };


?>

