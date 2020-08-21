<html>
<body>

    <?php

        $cores = ['ciano', 'verde', 'amarelo'];

        $cores[] = 'vermelho';
        $cores[] = 'azul';
        $cores[] = 'roxo';

        unset($cores[1]);

        foreach( $cores as $a ){
            echo "<li>$a<br></li>";
        }

    ?>


</body>
</html>