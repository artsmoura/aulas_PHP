<?php

require('db.php');

$ps = $pdo->prepare("INSERT INTO cliente (nome, email, telefone) VALUES (?,?,?)");
$ps->execute([ $_POST['nome'], $_POST['email'], $_POST['telefone'] ]);

$pd = $pdo->query("SELECT nome, email, telefone FROM cliente");

echo "<strong>Pratos</strong><br><br>";

?>
<table border = '1'>
    <?php
        echo "<tr><td>Nome</td><td>Email</td><td>Telefone</td></tr>";
         while($cliente = $pd->fetch()){
            echo "<tr><td>$cliente[nome]</td><td>$cliente[email]</td><td>$cliente[telefone]</td></tr>";
        }
    ?>
</table>