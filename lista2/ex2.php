<?php
    $numA = $_GET['a'];
?>

<html>
<body>
    <ul>
        <?php

        for($num = 1; $num <= $numA; $num++){
            echo "<li>O numero é $num </li>";
        }

        ?>
    </ul>
</body>
</html>