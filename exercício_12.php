<<?php

function analisarProdutos($produtos, $pesquisa) {

    $maisCaro = array_keys($produtos, max($produtos));
    $maisBarato = array_keys($produtos, min($produtos));
    $media = array_sum($produtos) / count($produtos);

    if (isset($produtos[$pesquisa])) {
        $precoPesquisa = $produtos[$pesquisa];
    } else {
        $precoPesquisa = "Produto não encontrado"; 
    }

    return [
        'maisCaro' => $maisCaro,
        'maisBarato' => $maisBarato,
        'media' => $media,
        'pesquisa' => $pesquisa
    ];
}

$produtos = [
    'Produto A' => 10.99,
    'Produto B' => 5.49,
    'Produto C' => 15.99,
    'Produto D' => 7.99
];

$pesquisa = 'Produto B';

$resultado = analisarProdutos($produtos, $pesquisa);

echo "Mais caro: " . implode(', ', $resultado['maisCaro']) . "<br>";
echo "Mais barato: " . implode(', ', $resultado['maisBarato']) . "<br>";
echo "Média: " . $resultado['media'] . "<br>";
echo $resultado["pesquisa"];

?>