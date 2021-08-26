<?php 

    $partite = [

        [casa => milan, ospite => juventus, puntiC => 10, puntiO => 20],
        [casa => atalanta, ospite => sampdonia, puntiC => 30, puntiO => 20],
        [casa => inter, ospite => napoli, puntiC => 0, puntiO => 100],

    ];

    for($i=0; $i < count($partite); $i++) {

        echo "{$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["puntiC"]} - {$partite[$i]["puntiO"]} </br>";

    };


?>