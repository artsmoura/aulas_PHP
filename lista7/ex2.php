<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulario</title>
</head>
<body>
    
    <!-- caso só haja uma simples composição do codigo php contendo eco, pode-se substituir ?php echo por '=' -->
    
    <?php 
        if(isset($_GET['termo_sim'])){
            echo "<h1>Bem vindo! $_GET[usuario]</h1>";
        } else {
            echo "<h1>Você precisa aceitar os termos de uso";
        }
    ?>

</body>
</html>