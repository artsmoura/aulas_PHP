<?php

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
    
        Atividade 7: <br>
        O maior numero é <?php echo $maiorNUM ?>, corresponde ao numero da letra: <?php echo $maiorVAR ?>

    </p>
</body>
</html>

