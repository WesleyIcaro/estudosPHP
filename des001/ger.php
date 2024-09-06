<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com número aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>

        <?php

        if(isset($_POST['random'])) {
            $sorteio = rand(0, 100);
            echo "<p>O valor gerado foi <strong>$sorteio</strong></p>";
        }        

        ?>

        <form method="post">
            <button type="submit" name="random">Gerar número</button>
        </form>
    </main>
</body>

</html>