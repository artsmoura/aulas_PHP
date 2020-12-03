<?php

session_start();

require('db.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

//criar o hash da senha novamente para fazer a verificação
$salt = 'desenvolvimentowebaula'.$login;
$senha_hash = sha1($salt.$senha);

//faz a verificação se existe usuario e senha para autenticar ele
$ps = $pdo->prepare(
    'SELECT * FROM usuario WHERE login = ? AND senha = ?'
);
$ps->execute([ $login, $senha_hash ]);

//se o usuario for autenticado, cria-se a variavel de sessao
if($dado = $ps->fetch()){
    //a variavel dado deixa de existir ao sair dessa pagina, mas como estou armazenando em uma $_SESSION eu consigo levar ele adiante
    $_SESSION['login'] = $dado['login'];
    $_SESSION['nome'] = $dado['nome'];
    $_SESSION['data_nasc'] = $dado['data_nasc'];
    $_SESSION['senha'] = $dado['senha'];

    echo "Login bem sucedido.<br>";
    echo "<a href='index.php'>Pagina Inicial</a>";

} else {
    //caso ele não encontre nada no fetch, ele retorna false e entra nesse else
    echo "Falha da autenticaçao do usuario";
    echo "<br><a href='index.php'>Voltar</a>";
    exit;
}