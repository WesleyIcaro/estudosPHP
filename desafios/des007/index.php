<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php
        $numero = $_GET['numero'] ?? 1;
        ?>

        <h1>Informe um númmero</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>

        <?=
        "<p>Analisando o <strong>número $numero, temos:</strong></p>";

        echo "<ul>
            <li>A sua raiz quadrada é " . number_format($numero ** (1 / 2), 3, ',', '.') . "</li>
            <li>A sua raiz cubica é " . number_format($numero ** (1 / 3), 3, ',', '.') . "</li>
        </ul>";
        ?>

    </section>

</body>

</html>