<?php

$basket = [
    [
        "casa" => "Germania",
        "scoreCasa" =>rand(1, 100),
        "ospite" => "Russia",
        "scoreOspite" =>rand(1, 100)
    ],
    [
        "casa" => "Grecia",
        "scoreCasa" =>rand(1, 100),
        "ospite" => "Francia",
        "scoreOspite" =>rand(1, 100)
    ],
    [
        "casa" => "Italia",
        "scoreCasa" =>rand(1, 100),
        "ospite" => "Spagna",
        "scoreOspite" =>rand(1, 100)
    ],
    [
        "casa" => "Brasile",
        "scoreCasa" =>rand(1, 100),
        "ospite" => "Giappone",
        "scoreOspite" =>rand(1, 100)
    ],
    [
        "casa" => "Burundi",
        "scoreCasa" =>rand(1, 100),
        "ospite" => "Zimbabwe",
        "scoreOspite" =>rand(1, 100)
    ],


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ol>
        <?php
        for ($i=0; $i < count($basket); $i++){ 
            $test = $basket[$i];
            $risultati = $test["casa"] . " - " . $test["ospite"] . " | ". $test["scoreCasa"] ." - " . $test["scoreOspite"];
        ?> 
            <li>
                <?php 
                    echo $risultati
                ?>
            </li>
        <?php } ?>
    </ol>

</body>
</html>