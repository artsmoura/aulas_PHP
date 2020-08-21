<html>  
    <body>
        <?php

            $faren = 5;

            while ($faren <= 150) {

            $celsius = 0.55 * ($faren - 32);

                echo "<table border='1'><tr><td>$faren</td><td>$celsius</td></tr></table>";

            $faren = $faren + 5;

            }

        ?>
    </body>
</html>
