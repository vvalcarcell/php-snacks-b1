<?php 

    $alunni = [

        ["name" => "anna", "surname" => "maisto", "votes" => [5, 6, 2]],
        ["name" => "giulia", "surname" => "sannino", "votes" => [7, 6, 8]],
        ["name" => "anna", "surname" => "maisto", "votes" => [5, 6, 9]]

    ];

    function avarage ($array) {

        return array_sum($array)/count($array);

    };


    for($i=0; $i < count($alunni); $i++) {

        $votesAvg = avarage ($alunni[$i]["votes"]);
        $votesAvg2 = number_format($votesAvg, 1, ".", " ");
        

        echo "{$alunni[$i]["name"]} {$alunni[$i]["surname"]}, media voti: {$votesAvg2} </br>";


    };



?>