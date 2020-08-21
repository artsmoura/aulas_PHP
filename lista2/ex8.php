<?php

    for ($num = 1; $num <= 10; $num ++){
        echo "$num<br>";
    }

    $par = 0;
    $impar = 0;
    for ($num = 1; $num <= 10; $num ++){
        if($num % 2 === 1){
            $par++;
        } else {
            $impar++;
        }
    }

    echo "par: $par";
    echo "impar: $impar";

    $somaPar = 0;
    for ($par = 1; $par <= 10; $par ++){
        $somaPar += $par;
    }
    
    echo "<br>Soma Pares: $somaPar";

    $media = 0;
    for ($par =1; $par <=10; $par ++){
        $media = $somaPar / $par;
    }
    
    echo "<br>$media";


?>