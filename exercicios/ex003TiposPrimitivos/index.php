<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes de tipos primitivos em PHP</title>
</head>

<body>

    <h1>Testes de tipos primitivos em PHP</h1>

    <?php

    // Tipos escalares

    $sobrenome = 'Silva'; // string

    $idade = 34; // int ou integer 

    $peso = 85.9; // float, double ou real (real funcionou somente até a versão 7.4).

    $casado = true; // bool ou boolean

    // 0x = hexadecimal 0b = binário 0 = Octal
    // $num = 010;
    // echo "O valor da variável é $num"

    // $v = "Wesley";
    // var_dump($v)

    // $num = 3e2; // 3 x 10²
    // echo "O valor é $num"

    // $num = (int) "950";
    // var_dump($num);

    // $casado = false;
    // var_dump($casado);
    // print "O Wesley já é casado? $casado" // Se uso print ou echo o valor de false é vazio

    // $vet = [11, 4, "Maria", 12, 655, false];
    // var_dump($vet);

    // Tipos composto

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p)

    // Tipos especiais

    // null e tenhos que pesquisa o restante

    ?>

</body>

</html>