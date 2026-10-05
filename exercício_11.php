<?php

function formatarTexto($texto)
{
    $maiusculo = strtoupper($texto);
    $minusculo = strtolower($texto);
    $primeiraMaiuscula = ucfirst($texto);
    $quantidadeCaracteres = strlen($texto);

    return [
        'maiusculo' => $maiusculo,
        'minusculo' => $minusculo,
        'primeiraMaiuscula' => $primeiraMaiuscula,
        'quantidadeCaracteres' => $quantidadeCaracteres
    ];
}

$texto = "melhor código do mundo";

$resultado = formatarTexto($texto);

echo "Maiúsculo: " . $resultado['maiusculo'] . "<br>";
echo "Minúsculo: " . $resultado['minusculo'] . "<br>";
echo "Primeira letra maiúscula: " . $resultado['primeiraMaiuscula'];
echo "Quantidade de caracteres: " . $resultado['quantidadeCaracteres'] . "<br>";

?>