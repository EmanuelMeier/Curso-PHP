<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado final</h1>
    <p>
        <?php
            $num = $_REQUEST["numero"];
            $antecessor = $num - 1;
            $sucessor = $num + 1;

            echo "O numero digitado foi <strong>$num</strong>";
            echo "<br>O seu <em>antecessor</em> é $antecessor";
            echo "<br>O seu <em>sucessor</em> é $sucessor.";
        ?>
    </p>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>
