<?php

function analisarNumero($numero) {
       if ($numero % 2 == 0) {
        $parImpar = "Par";
    } else {
        $parImpar = "Ímpar";
    }
$primo = true;
    if ($numero <= 1) {
        $primo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
     }
    }

    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    if ($soma == $numero) {
        $perfeito = true;
    } else {
        $perfeito = false;
    }

}

$resultado = analisarNumero(28);

echo "Par ou ímpar: " . $resultado["Par ou ímpar"];
echo "Primo: " . $resultado["Primo"];
echo "Perfeito: " . $resultado["Perfeito"];

?>