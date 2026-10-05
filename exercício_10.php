<?php

function calcularMedia($notas) {
    
    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        'maior' => $maior,
        'menor' => $menor,
        'media' => $media,
        'situacao' => $situacao
    ];
}

$notas = [8, 6, 9, 10, 7];

echo "maior nota: " . calcularMedia($notas)['maior'];
echo "menor nota: " . calcularMedia($notas)['menor'];
echo "media: " . calcularMedia($notas)['media'];
echo "situacao: " . calcularMedia($notas)['situacao'];

?>