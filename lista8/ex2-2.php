<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Olá!</h1>
    <?php
        if(empty($_SESSION['nome'])){
            echo "<h3>Seja Bem vindo(a), visitante</h3>";
        }else {
            echo "<h3>Bem vindo {$_SESSION['nome']}</h3>";
        }
    ?>
</body>
</html>