<?php
$name = "";
$mail = "";
$age = "";

if(key_exists("name", $_GET)){
    $name = $_GET["name"];
}

if(key_exists("mail", $_GET)){
    $mail = $_GET["mail"];
}

if(key_exists("age", $_GET)){
    $age = $_GET["age"];
}

$result = true;

if(strlen($name) < 3){
    $result = false;
}

if(!strpos($mail, "@")){
    $result = false;
}

if(!strpos($mail, ".", strpos($mail, "@"))){
    $result = false;
}

if(!is_int($age)){
    $result = false;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <p>
        <?php
            echo $result ? "Accesso riuscito" : "Accesso negato";
        ?>
    </p>


</body>
</html>