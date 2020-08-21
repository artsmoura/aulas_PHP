<html>
<body>

<?php
    $num = $_GET['num'];

    for($i = 1; $i <= 10; $i++){
       echo "$num * $i = ", $num * $i, "<br>";
    }

?>

</body>
</html>
