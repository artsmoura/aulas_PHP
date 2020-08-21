<html>
<body>

    <?php

        $texto = $_GET['texto'];
        $value = explode(" ",$texto);
        $quant = count($value);

        for($i = 0; $i <= ($quant-1); $i++){
            echo "<li>$value[$i]</li>";
        }

    ?>


</body>
</html>