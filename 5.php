<?php

    $text= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ea, facere esse laborum impedit dolore deleniti modi, aliquid quos a nihil repudiandae perspiciatis laudantium. Culpa minus esse commodi necessitatibus eius.";
    
    $textArray = explode(".", $text);

    for($i=0; $i < count($textArray)-1; $i++) {

        echo "<p> {$textArray[$i]}. </p>";

    }

    
?>
