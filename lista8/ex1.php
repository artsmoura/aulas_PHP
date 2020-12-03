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
        if(isset($_SESSION['qnt_acesso'])){
          $_SESSION['qnt_acesso']++;
          echo "Essa é sua visita numero " .$_SESSION['qnt_acesso'];
        }
        else{
          echo "Essa é sua primeira visita";
          $_SESSION['qnt_acesso'] = 0;
        }
    ?>
</body>
</html>