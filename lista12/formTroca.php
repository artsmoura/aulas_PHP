<?php
 require('autentica.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha - Lista 12</title>
</head>
<body>
    <form action="trocaSenha.php" method="post">
        Digite a senha atual<br>
        <input type="password" name="senhaAntiga"><br>
        Digite a sua nova senha<br>
        <input type="password" name="senhaNova"><br>
        <input type="submit" value="Trocar">
    </form>
</body>
</html>