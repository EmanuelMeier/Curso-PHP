<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings em PHP</title>
</head>
<body>
    <h1>Exemplo 1</h1>
    <?php 
        $nome = 'Gustavo';
        $sobrenome = "Guanabara \u{1F596}";
        echo "$nome$sobrenome";
    ?>
</body>
</html>