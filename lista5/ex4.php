<html>
<body>

    <?php

        $num = $_GET['num'];
        $quant = count($num); //pega a quantidade de valores na array

        $soma = array_sum($num);
        $mediaAr = $soma/$quant;
        echo "os valores somados: ", $soma;
        echo "<br><br>a media Aritmetica é: ", $mediaAr;


    ?>


</body>
</html>