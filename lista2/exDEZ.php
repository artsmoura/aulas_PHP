<html>
<body>

<?php
    $x = $_GET['x'];
    $n = $_GET['n'];
    $resultado = 1;
    
    for($i = 0; $i < $n; $i++){
      $resultado *= $x;
    }

    echo $resultado;
?>

</body>
</html>