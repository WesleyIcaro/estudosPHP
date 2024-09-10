<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>

        <?php 

        $numero = $_GET['numero'] ?? 0;

        echo "<p> Analisando o número <strong>" . number_format($numero, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

        // $numeros = explode(".", $numero);

        $inteiro= (int) $numero;
        $real=  $numero - $inteiro;

        echo "
        <ul>
            <li>A parte inteira do número é " . number_format($inteiro, 0, ",", ".")."</li>
            <li>A parte fracionária do número é " .number_format($real, 3, ",", ".") . "</li>
        </ul>";

        ?>

    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
    </main>
</body>
</html>