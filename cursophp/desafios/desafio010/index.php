<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $atual = date("Y"); 
    $anoNasc = $_GET['ano'] ?? '2000';
    $ano = $_GET['at'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" min="1900" max="<?=$atual?>" required value="<?=$anoNasc?>">
            <label for="at">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="at" id="at" min="1900" required value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $anoNasc;

            echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idade anos</strong> em $ano!</p>";
        ?>
    </section>
</body>
</html>