<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas</h1>
    <?php 
		// Cotacao vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotação = $dados["value"][0]["cotacaoCompra"]; 

        
        // Quanto $$ você tem?
        $real = $_REQUEST["din"] ?? 0;
        
        // Equivalencia em dolar
        $dolar = $real / $cotação;
        
        // Mostrar o resultado
        echo "<p>Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a <strong> US\$" . number_format($dolar, 2, ",", ".") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>

