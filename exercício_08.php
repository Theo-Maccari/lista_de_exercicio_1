<?php

function ordenarNomes($nomes) {
   
$lista = explode(',', $nomes);

foreach ($lista as $i => $nome) {
    $nome = trim($nome);
    $lista[$i] = $nome;
}

sort($lista);
return $lista;
}

$nomes = "Leonardo, Miguel, Theo, Tiago";
$resultado = ordenarNomes($nomes);
echo implode(', ', $resultado);

?>