<?php

// echo "PHP \u{1F418}"; // double quotes tem seu conteúdo interpretado
// echo 'PHP \u{1F418}'; // single quotes não tem seu conteúdo interpretado

// $nome = "Wesley";
// echo "Olá $nome"; // Funciona
// echo 'Olá $nome'; // Não funciona

// const ESTADO = "MG";
// echo "Moro em " . ESTADO;
// echo "Estamos em " . date("Y");

$nome = "Wesley";
$snome = "Lima";
$apelido = "Maria";
$version = phpversion();

// echo "$nome\n\t \"$apelido\" \t\t$snome \t\t$version"; // A contra barra permite as aspas duplas aparecerem dentro das aspas duplas


$name = "Wesley";
$sname = "Lima";
$nick = "Maria";
// echo "$name \n \"$nick\" \t$sname \u{1F596}";

echo "$nome\n\"$apelido\"\n$snome\n$version"; // A 

// echo <<< FRASE // Com interpretação
// $apelido

//   $snome
  
// FRASE;  


// echo <<< 'FRASE' // Sem interpretação
// $apelido

//   $snome 
  
// FRASE; 

// \n Nova linha

// \t Tabulação horizontal

// Barra invertida

// \$ Sinal de cifrão

// \u{} Codepoint Unicode
?>