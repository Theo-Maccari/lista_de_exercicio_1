<?php

function estatisticasNumericas {

$soma = array_sum($numeros);
$media = $soma / count($numeros);
$maior = max($numeros);
$menor = min($numeros);

sort($numeros);

$quantidade = count($numeros);
$meio = floor($quantidade / 2);
if ($quantidade % 2 == 0) {
    $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
} else {
    $mediana = $numeros[$meio];
}

$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

return [
    'soma' => $soma,
    'media' => $media,
    'maior' => $maior,
    'menor' => $menor,
    'mediana' => $mediana,
    'pares' => $pares,
    'impares' => $impares
];

}

$numeros = [5, 10, 15, 20, 25, 30];
$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado['soma'] . "<br>";
echo "Média: " . $resultado['media'] . "<br>";
echo "Maior: " . $resultado['maior'] . "<br>";
echo "Menor: " . $resultado['menor'] . "<br>";
echo "Mediana: " . $resultado['mediana'] . "<br>";
echo "Quantidade de pares: " . $resultado['pares'] . "<br>";
echo "Quantidade de ímpares: " . $resultado['impares'] . "<br>";

?>