<?php

require('db.php');

$ps = $pdo->query("SELECT nome, preco FROM pratos");

echo "<strong>Pratos</strong><br><br>";
?>
<table border = '1'>
    <?php
        echo "<tr><td>Nome</td><td>Preço</td></tr>";
        while($prato = $ps->fetch()){ 
            echo "<tr><td>$prato[nome]</td><td>$prato[preco]</td></tr>";
        }
    ?>
</table>
