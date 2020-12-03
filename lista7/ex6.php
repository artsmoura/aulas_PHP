<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulario</title>
</head>
<body>
    <h3>Seu codigo: </h3>
    <?php 
        echo '<pre>';
        echo htmlentities($_POST['texto']);
        echo '</pre>'
    ?>
    <br><br>
    <h3>Seu codigo formatado: </h3>
        <?php echo $_POST['texto']?>
</body>
</html>