<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


$key = array_keys($posts);


for($i=0; $i < count($posts); $i++) {

    echo "<div>{$key[$i]}</div>";
    

    #L'indice non è numerico quindi come indice devo mettere [$key[$i] (che nel "frattempo" cicla)
    for ($x=0; $x < count($posts[$key[$i]]); $x++) {

        echo "{$posts[$key[$i]][$x]["author"]} </br>
              {$posts[$key[$i]][$x]["text"]} </br>";

    };

    echo "</br>";

};


?>
