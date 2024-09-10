<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>

        <?php

        $carteira = $_GET['carteira'] ?? 0;

        $inicio= date('m-d-Y', strtotime("-7 days"));

        $fim = date('m-d-Y');

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim  . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //    'Content-Type: application/json',
        //    'Authorization: Bearer ' . $token
        //    ));

        // $data = curl_exec($ch);
        // $info = curl_getinfo($ch);

        $valores = json_decode(file_get_contents($url), true);

        $dolar;

        // foreach ($valores as $item) {
        //     $dolar = $item['cotacaoCompra'];
        // }

        $cotacao = $valores['value'][0]['cotacaoCompra'];

        $convertido = $carteira / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $carteira, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $convertido, "USD") . "*</strong></p>";

        // curl_close($ch);
        ?>

        <p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/" target="_blank" rel="noreferrer noopener">Banco Central do Brasil</a></p>

        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>

</html>