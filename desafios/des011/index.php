<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $segundo = $_GET['segundo'] ?? 0;

    $contado_segundo = $segundo;

    // if ($contado_segundo >= 604800) {
    //     $semanas = floor($contado_segundo / 604800);
    //     $contado_segundo = $segundo - (604800 * $semanas);
    // } else {
    //     $semanas = 0;
    // }


    // $semanas = intdiv($contado_segundo, 604_800);

    // Total de semanas
    $semanas = (int) ($contado_segundo / 604_800);

    $contado_segundo = $contado_segundo % 604_800;

    // $dias = intdiv($contado_segundo, 86_400);

    // Total de dias
    $dias = (int) ($contado_segundo / 86_400);

    $contado_segundo = $contado_segundo % 86_400;

    // $horas = intdiv($contado_segundo, 3_600);

    // Total de horas
    $horas = (int) ($contado_segundo / 3_600);

    $contado_segundo = $contado_segundo % 3_600;

    // $minutos = intdiv($contado_segundo, 60);

    // Total de minutos
    $minutos = (int) ($contado_segundo / 60);

    $contado_segundo = $contado_segundo % 60;

    // Total de segundos
    $segundos = $contado_segundo;

    // if ($contado_segundo >= 86400) {
    //     $dias = floor($contado_segundo / 86400);
    //     $contado_segundo = $contado_segundo - (86400 * $dias);
    // } else {
    //     $dias = 0;
    // }

    // if ($contado_segundo >= 3600) {
    //     $horas = floor($contado_segundo / 3600);
    //     $contado_segundo =  $contado_segundo - (3600 * $horas);
    // } else {
    //     $horas = 0;
    // }

    // if ($contado_segundo >= 60) {
    //     $minutos = floor($contado_segundo / 60);
    //     $contado_segundo =  $contado_segundo - (60 * $minutos);
    // } else {
    //     $minutos = 0;
    // }

    // if ($contado_segundo >= 1) {
    //     $segundos = $contado_segundo;
    // } else {
    //     $segundos = 0;
    // }

    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundo">Qual é o total de segundos</label>
            <input type="number" name="segundo" id="segundo" value="<?= $segundo ?>" min="0" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?= "<p>Analisando o valor que você digitou, " . number_format($segundo, 0, ',', '.') . " segundos equivalem a um total de:</p>";
        ?>

        <?= "<ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos segundos</li>
             </ul>"
        ?>
    </section>
</body>

</html>