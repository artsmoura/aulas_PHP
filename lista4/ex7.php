<html>
<body>
    <table border = '1'>
    <?php

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

        $capitais["Brasil"] = "Brasilia";
        $capitais["Russia"] = "Moscow";
        $capitais["Argentina"] = "Buenos Aires";

        foreach( $capitais as $a => $b){
            echo "<tr><td>$a</td><td>$b</td></tr>";
        }

    ?>
    </table>

</body>
</html>