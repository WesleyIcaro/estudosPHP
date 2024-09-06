<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
        
        $dinheiro = $_GET['dinheiro'];

        $convertido = $dinheiro / 5.54;        

        echo "<p>Seus R$ $dinheiro equivalem a US$ <strong>" . number_format($convertido, 2) . "</strong></p>";

        if(isset($_POST['voltar'])) {
            echo "<h1>Opaaa</h1>";
            header("Location: /index.html");
        };

        ?>

        <p><strong>*Cotação fixa de R$ 5,54</strong> informada diretamente no código</p>

        <button type="button" name="voltar">Voltar</button>

    </main>
</body>
</html>