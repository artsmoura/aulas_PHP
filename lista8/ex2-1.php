<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulario</title>
</head>
<body>
    <h1>Olá!</h1>
    <?php
        $_SESSION['nome'] = $_GET['nome'];
        echo "<h3>Seja bem vindo {$_SESSION['nome']}</h3>";
    ?>
    <a href="ex2-2.php">Proxima Pagina</a>
</body>
</html>