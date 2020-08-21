<html>
<body>
    <table border = '1'>
    <?php

        $tipo = $_GET['tipo'];
        
        $capitais = [
            "Italy" => "Rome",
            "Luxembourg" => "Luxembourg",
            "Belgium" => "Brussels",
            "Denmark" => "Copenhagen",
            "Finland" => "Helsinki",
            "France" => "Paris",
            "Slovakia" => "Bratislava",
            "Slovenia" => "Ljubljana",
            "Germany" => "Berlin"
        ];
        
        if ($tipo == "a"){   
            natsort($capitais);   //ascendente    
            foreach( $capitais as $a => $b){
                echo "<tr><td>$a</td><td>$b</td></tr>";
            }
        } elseif ($tipo == "d"){
            arsort($capitais); //descendente
            foreach( $capitais as $a => $b){
                echo "<tr><td>$a</td><td>$b</td></tr>";
            }
        }
    ?>
    </table>

</body>
</html>