<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $customer = "Falcao";
        echo "the customer {$customer} bought <br>";

        //2. Integer. es un numero//
        $price = 5000;
        echo "that cost {$price}";

        // Floating point number -floats -doubles - real numbers//
        $goal_rate_per_game = 4.5;
        echo "<br> and now he is celebratring his goal rate per futbol game of {$goal_rate_per_game}";

        // 4. Booelan. Tiene 2 valores true o false//
        $state = true;
        echo "<br> Is Falcao a champion? {$state}";

        // Obtener tipo de datos//
        $type_data = gettype($goal_rate_per_game);
        echo "<br> Tipo de dato es: {$type_data }";
    ?>
</body>
</html>