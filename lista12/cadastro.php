<?php

    require('db.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];

    if(
        validar_login($login) &&
        validar_nome($nome) &&
        validar_senha($senha) &&
        validar_data($data_nasc)
    ) {
        $ps = $pdo->prepare(
            'SELECT * FROM  usuario WHERE login = ?'
        );
        $ps->execute([ $login ]);

        if($ps->fetch()){ //aqui vai procurar se existe alguma linha, se existir o usuario já existe
            echo "Usuario já cadastrado";
        } else{
            fazer_cadastro($login, $senha, $nome, $data_nasc);
        }

    } 
    else {
        echo "Erro. Os dados são invalidos";
    }

    function fazer_cadastro($login, $senha, $nome, $data_nasc){
        global $pdo; //por estar dentro de uma função é preciso que declare que essa variavel é global

        $salt = 'desenvolvimentowebaula'.$login;
        $senha_has = sha1($salt.$senha);

        $ps = $pdo->prepare(
            'INSERT INTO usuario (login, senha, nome, data_nasc) VALUES (?,?,?,?)'
        );
        $ps->execute([ $login, $senha_has, $nome, $data_nasc ]);

        if($ps->rowCount() == 1){ //verifica se funcionou, pois ao criar um dado no BD ele insere uma linha no BD
            echo "Cadastro efetuado com sucesso!";
        } else {
            echo "Erro no cadastro do usuario";
        }

    }

    function validar_login($login){
        if($login == ''){
            return FALSE;
        } else {
            return TRUE;
        }
        //o usuario não pode deixar em branco
    }
    function validar_nome($v){
        if($login == ''){
            return FALSE;
        } else {
            return TRUE;
        }
    }
    function validar_senha($senha){
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{6,}$/', $senha);
        //faz a verificação da senha, buscando ter entre 6 ou + caracteres, letra maiuscula, minuscula, numero e algum dos caracteres especial(_@$)
    }
    function validar_data($data_nasc){
        // separando yyyy, mm, ddd
        list($ano, $mes, $dia) = explode('-', $data_nasc);

        // data atual
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

        // cálculo
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        if($idade >= 5 && $idade <= 100){
            return TRUE;
        } else {
            return FALSE;
        }
    }
