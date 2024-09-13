<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php

        $dividendo = $_GET['dividendo'] ?? 0;

        $divisor = $_GET['divisor'] ?? 1;

        $resto = ($dividendo % $divisor) ?? 0;

        $quociente = floor($dividendo / $divisor) ?? 0;

        // $quociente = intdiv($dividendo, $divisor);

        ?>

        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" min="1" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>

    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tbody>
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $resto ?></td>
                    <td><?= $quociente ?></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>