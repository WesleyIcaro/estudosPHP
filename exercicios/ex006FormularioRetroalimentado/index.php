<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php

        $numero1 = $_GET['numero1'] ?? 0;

        $numero2 = $_GET['numero2'] ?? 0;


        ?>

        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero1">Primeiro Número</label>
            <input type="text" name="numero1" id="numero1" value="<?= $numero1 ?>">
            <label for="numero2">Segundo Número</label>
            <input type="text" name="numero2" id="numero2" value="<?= $numero2 ?>">
            <input type="submit" value="Enviar">
        </form>


        <?= "</br><main>
                 <h2>Resultado da Soma</h2>
                 <p>A soma dos valores $numero1 e $numero2 é <strong>" . $numero1 + $numero2 . "</strong></p>
              </main>
                ";
        ?>

    </main>
</body>

</html>