<?php
    session_start();

    if(!isset($_SESSION['login'])){
        require('login.php');
        exit;
    }


?>