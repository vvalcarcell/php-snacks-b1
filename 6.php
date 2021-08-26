<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="6php.css">
    <title>Snack 6</title>
</head>
<body>

    <?php
 
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

 
    ?>

    <div class="green">
        <h1>Teachers</h1>
        <?php 
            $numTeachers = count($db["teachers"]);
            for($i=0; $i < $numTeachers ; $i++){
                echo "{$db["teachers"][$i]["name"]} {$db["teachers"][$i]["lastname"]} </br>";
            }
        ?>
    </div>

    <div class="grey">
        <h1>Pm</h1>
        <?php 
            $numPm = count($db["pm"]);
            for($i=0; $i < $numPm ; $i++){
                echo "{$db["pm"][$i]["name"]} {$db["pm"][$i]["lastname"]} </br>";
            }
        ?>

    </div>
 




</body>
</html>