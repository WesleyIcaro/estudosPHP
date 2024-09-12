<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <?php 
            $salario = $_GET['salario'] ?? 1412;

            $minimos = floor($salario / 1412);
    
            $restante = $salario % 1412;
        ?>

        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario ?>">
            <p>Considerando o salário minímo de R$ 1.412,00</p>
            <input type="submit" value="Calcular">
        </form>        
    </main>

    <section>
        <h1>Resultado Final</h1>

        <?=
        "<p>Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " ganha <strong>$minimos salários minímos</strong> + R$ " . number_format($restante, 2,",", ".") . ".</p>"
        ?>
    </section>
</body>
</html>