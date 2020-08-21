<?php

    for ($num = 1; $num <= 10; $num ++){
        echo "$num<br>";
    }

    
    $soma = 0;
    for ($num = 1; $num <= 10; $num ++){
        $soma += $num;
    }
    
    echo "<br>$soma";

    $media = 0;
    for ($num =1; $num <=10; $num ++){
        $media = $soma / $num;
    }
    
    echo "<br>$media";

?>