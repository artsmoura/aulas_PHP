<?php

require('db.php');

$ps = $pdo->query("SELECT nome, preco, apimentado FROM pratos ORDER BY preco");

echo "<strong>Pratos</strong><br><br>";
?>
<table border = '1'>
    <?php
        echo "<tr><td>Nome</td><td>Preço</td></tr>";
        while($prato = $ps->fetch()){            
            if ($prato['apimentado'] == 1){
                echo "<tr><td>$prato[nome]</td><td>$prato[preco]*</td></tr>";
            } else {
                echo "<strong><tr><td>$prato[nome]</td><td>$prato[preco]</td></tr></strong>";
            }
        }
    ?>
</table>
