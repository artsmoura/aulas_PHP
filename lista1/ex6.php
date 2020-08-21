<?php

    $f = $_GET['f'];

    $c = 5/9*($f - 32);

    $numA = $_GET['a'];
    $numB = $_GET['b'];
    $maiorNUM;
    $maiorVAR;  

    if ($numA > $numB) {
        $maiorNUM = $numA;
        $maiorVAR = 'A';
    } else {
        $maiorNUM = $numB;
        $maiorVAR = 'B';
    }


?>

<html>
<body>
    <p>
        Atividade 6: <br>
        A temperatura em Fahrenheit é de <?php echo $f ?> <br>
        A temperatura em Celsius é de <?php echo $c ?> <br> <br> <br>

        Atividade 7: <br>
        O maior numero é <?php echo $maiorNUM ?>, corresponde ao numero da letra: <?php echo $maiorVAR ?>

    </p>
</body>
</html>

