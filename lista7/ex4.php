<?php 
   $fonte = $_GET['font']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulario</title>
</head>
<body>
    
    <h3>Seu comentario com a nova fonte:</h3>
    <p style="font-family:'<?php echo $fonte ?>'">
        <?= $_GET['texto']?>
    </p>
</body>
</html>