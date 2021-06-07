<?php

$posts = [
    '01/01/2000' => [
        [
            'title' => 'Post 1',
            'author' => 'Andrea',
            'text' => 'Testo Prova'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele',
            'text' => 'Testo Prova'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Alex',
            'text' => 'Testo Prova'
        ]
    ],
    '02/01/2000' => [
        [
            'title' => 'Post 4',
            'author' => 'Alina',
            'text' => 'Testo Prova'
        ]
    ],
    '03/01/2000' => [
        [
            'title' => 'Post 5',
            'author' => 'Jennifer',
            'text' => 'Testo Prova'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Brad',
            'text' => 'Testo Prova'
        ]
        
    ],

];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    
    <ul>
        <?php
        $keysMap = array_keys($posts);

        var_dump($keysMap);

        for ($i = 0; $i < count($posts); $i++){
            $key  = $keysMap[$i];

            /* var_dump($i, $key); */

            $value = $posts[$key];

            echo "<li>" . $key;
            echo "<ul>";

            for($y = 0; $y < count($value); $y++){
                $post = $value[$y];
                /* var_dump($y, $post); */

                echo "<li>";

                echo "<p>" . $post["title"] . "</p>";
                echo $post["author"] . "<br>";
                echo $post["text"];
                    
                echo "</li>";

            }

            echo "</ul>";
            echo "</li>";

        }
    

        ?>
    
    </ul>

</body>
</html>