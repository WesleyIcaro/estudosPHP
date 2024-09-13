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
    // if ($nascimento < $ano) {
    $idade = - ($nascimento - $ano);
    // } else {
    // $idade = false;
    // }
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nascimento">Em que Ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?= $nascimento ?>" min="1900" max="<?= $ano - 1 ?>">
            <label for="nascimento">Quer saber sua idade em qual ano? (atualemte estamos em <strong><?= $ano ?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?=
        // $idade ? 
        "<p>Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano</p>"
        // : "<p>O ano de nascimento deve ser menor que o ano atual</p>" 
        ?>
    </section>
</body>

</html>