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

        $carteira = $_GET['carteira'];



        


        $ch = curl_init('https://economia.awesomeapi.com.br/json/daily/USD-BRL');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //    'Content-Type: application/json',
        //    'Authorization: Bearer ' . $token
        //    ));

        $data = curl_exec($ch);
        $info = curl_getinfo($ch);

        $valores = json_decode($data, true);

        $dolar;

        foreach ($valores as $item) {
            $dolar = $item['bid'];
        }



        echo "<p>Seus R$ $carteira equivalem a <strong>US$" . number_format($carteira / $dolar, 2) . "*</strong></p>";

        // echo $data[0]['bid'];

        curl_close($ch);

        echo "<p>*Cotação obtida diretamente do site do <strong>Banco Centra do Brasil</strong></p>";

        echo "<button type='button'>Voltar</button>";

        ?>

        

    </main>
</body>

</html>