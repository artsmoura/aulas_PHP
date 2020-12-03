<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulario</title>
</head>
<body>
    <h1>Bem vindo!</h1>
    O seu nome é: <?= $_GET['nome'] ?> <br>
    <!-- caso só haja uma simples composição do codigo php contendo eco, pode-se substituir ?php echo por '=' -->
    O seu sobrenome é: <?= $_GET['sobrenome'] ?>
</body>
</html>