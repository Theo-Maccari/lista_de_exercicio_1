<?php

function inverterTexto($texto){

$invertido = strrev($texto);
return $invertido;

}

$texto = "Inverter string PHP";
echo inverterTexto($texto);
echo "quantidade de caracteres: " . strlen($texto);

?>