<?php
 require('autentica.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo - Lista 12</title>
</head>
<body>
    <h1>
        Bem Vindo, <strong><?= $_SESSION['nome'] ?></strong>
    </h1>
    <p>Se você está vendo essa pagina, quer dizer que você está cadastrado</p>
    <p>Verificamos também que sua data de nascimento é <strong><?= $_SESSION['data_nasc'] ?></strong></p>
    <p>Parabéns</p>
    <input type="button" onclick="location.href='logoff.php'" value="Sair" />
    <input type="button" onclick="location.href='formTroca.php'" value="Trocar Senha">
</body>
</html>