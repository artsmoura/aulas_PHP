<html>
<body>

    <?php

        $linha = $_GET['x'];
        $coluna = $_GET['y'];

        for ($x=0;$x<=4;$x++){
            echo"<br>";
            for ($y=4;$y>=$x;$y--){
                echo "*";
            }
        }

    ?>

</body>
</html>