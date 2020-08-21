<?php

      $numA = $_GET['a'];
      $numB = $_GET['b'];
      $numC = $_GET['c'];
      $maiorNUM;
      $maiorVAR;  
  
      if ($numA > $numB) {
          $maiorNUM = $numA;
          $maiorVAR = 'A';
      } elseif ($numA > $numC) {
          $maiorNUM = $numB;
          $maiorVAR = 'B';
      } else {
          $maiorNUM = $numC;
          $maiorVAR = 'C';
      }

?>

<html>
<body>
      <p>

        Atividade 8: <br>
        O maior numero é <?php echo $maiorNUM ?>, corresponde ao numero da letra: <?php echo $maiorVAR ?>

      </p>
</body>
</html>