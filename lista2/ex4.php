<html>  
    <body>
        <?php

            for($faren = 5; $faren <= 150; $faren+=5) {

                $celsius = 0.55 * ($faren - 32);

                    echo "<table border='1'><tr><td>$faren</td><td>$celsius</td></tr></table>";

                    if($faren < 0 || $celsius < 0){
                        
                    }
                }

        ?>
    </body>
</html>