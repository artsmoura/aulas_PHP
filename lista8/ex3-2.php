<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h3>Seu pedido contem:</h3><br>
    <?php
        echo $_SESSION['uva'] ." Uva(s)<br>";
        echo $_SESSION['melancia'] ." Melancia(s)<br>";
        echo $_SESSION['laranja'] ." Laranja(s)<br>";
        echo $_SESSION['abacaxi'] ." Abacaxi(s)<br>";
        echo $_SESSION['manga'] ." Manga(s)<br>";
        echo $_SESSION['mamao'] ." Mamão(s)<br>";
    ?>
    
</body>
</html>