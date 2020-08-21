<?php

    $hamburguer = 9.95; //valores dos produtos 
    $milkshake = 8;
    $refri = 4.50;
    $gorjeta = 0.10;

    $pedido = ($hamburguer+$hamburguer) + $milkshake + $refri + $gorjeta; 
    /* 
        a partir dos valores dos produtos, criou-se a variavel 'pedido' para que pudesse revelar o valor 
        total da compra.
    */

?>

<html>
    <body>

    <p style="color: red;">Cardápio</p>
    <ul>
        <li>Hamburguer: R$ 9.95</li> 
        <li>MilkShake: R$ 9.95</li>
        <li>Refrigerante: R$ 4.50</li>
    </ul>

    </body>
</html>