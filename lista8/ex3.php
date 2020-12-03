<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h3>Bem Vindo!</h3><br>
    <?php
        if(!isset($_SESSION)){
          echo "Você infelizmente não escolheu nenhum produto";
        }
        else{
          echo "Deseja confirmar a lista?<br>";
          echo '<a href="ex3-2.php">Confirmar</a>';
          $_SESSION['uva'] = $_GET['qnt_uva'];
          $_SESSION['melancia'] = $_GET['qnt_melancia'];
          $_SESSION['laranja'] = $_GET['qnt_laranja'];
          $_SESSION['abacaxi'] = $_GET['qnt_abacaxi'];
          $_SESSION['manga'] = $_GET['qnt_manga'];
          $_SESSION['mamao'] = $_GET['qnt_mamao'];
        }
    ?>
    
</body>
</html>