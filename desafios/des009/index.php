<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $nascimento = $_GET['nascimento'] ?? 2000;

        $ano = $_GET['ano'] ?? date('Y');

        $idade = - ($nascimento - $ano);
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que Ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?=$nascimento?>">
            <label for="nascimento">Quer saber sua idade em qual ano? (atualemte estamos em <strong><?=$ano?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será sua idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?="<p>Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano</p>"?>
    </section>
</body>
</html>