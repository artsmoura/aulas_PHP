<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulario</title>
</head>
<body>
    <?php
        if(!isset($_GET['lista'])){
        echo "<li>Nenhuma opção foi selecionada</li>\n";
        }
        else {
            $final = (count($_GET['lista']) > 1)? 'ns': 'm';
            echo "Itens inclusos na sua lista ",
              count($_GET['lista']),
                " ite$final:\n<ul>";
                foreach($_GET['lista'] as $lista){
                    switch($lista){
                        case 'uva':
                        echo "<li>Voce adicionou Uva</li>\n";
                        break;
                        case 'melancia':
                        echo "<li>Voce adicionou Melancia</li>\n";
                        break;
                        case 'laranja':
                        echo "<li>Voce adicionou Laranja</li>\n";
                        break;
                        case 'abacaxi';
                        echo "<li>Voce adicionou Abacaxi</li>\n";
                        break;
                    }
                }
            echo "</ul>\n</li>\n";
        }
    ?>
</body>
</html>