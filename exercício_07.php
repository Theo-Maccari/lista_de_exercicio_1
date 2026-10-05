<?php

function calcularDesconto($valor, $desconto) {

if ($valor <= 100){
$desconto = 0;

}elseif{ ($valor <= 500){
$desconto = 10;

}elseif{  ($valor <= 1000){
$desconto = 20;

}else{ $desconto = 30; }
    }
}

return [
    'valorComDesconto' => $valorComDesconto,
    'valorfinal' => $valorfinal
];

}

$valor = 600;
$resultado = calcularDesconto($valor, $desconto);

echo "Valor original: R$ $valor <br>";
echo "Valor com desconto: R$ " . $resultado['valorComDesconto'] . "<br>";
echo "Valor final: R$ " . $resultado['valorfinal'] . "<br>";

?>