<?php
    require('autentica.php');
    require('db.php');

    $login = $_SESSION['login'];
    $nome = $_SESSION['nome'];
    $senhaBD = $_SESSION['senha'];
    $senhaAntiga = $_POST['senhaAntiga'];
    $senhaNova = $_POST['senhaNova'];

    $salt = 'desenvolvimentowebaula'.$login;
    $senha_verify = sha1($salt.$senhaAntiga);

    echo "<strong>$nome</strong>, ";

    if($senhaBD == $senha_verify){

        $salt = 'desenvolvimentowebaula'.$login;
        $senha_hash = sha1($salt.$senhaNova);

        $ps = $pdo->prepare(
            'UPDATE usuario SET senha= ? WHERE login = ?' 
        );
        $ps->execute([ $senha_hash, $login ]);

        echo "Senha alterada com sucesso<br>";
        echo "<a href='index.php'>Pagina Inicial</a>";

    } else {
        echo "A senha informada não coincide";
        echo "<br><a href='formTroca.php'>Voltar</a>";
        exit;
    }

?>

<!-- <!DOCTYPE html>
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
</html> -->

