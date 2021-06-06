<?php
$numCasuali = [];

for ($i = 0; $i < 15; $i++){
    $numero = rand(1,100);
        
    if (!in_array($numero, $numCasuali)){
        $numCasuali[] = $numero;
    }else{
        $i--;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

    <?php
        echo json_encode($numCasuali);
    ?>

</body>
</html>
