<?php

 function converterTemperatura($temperatura, $origem, $destino) {

$c = 0;
$f = 0;
$k = 0;


switch ($origem) {

    case 'C':
        $celsius = $temperatura;
    break;
    case 'F':
        $celsius = ($temperatura - 32) * 5 / 9;
    break;
    case 'K':
        $celsius = $temperatura - 273.15;
    break;

 }

switch ($destino) {

    case 'C':
        return $celsius;
    break;
    case 'F':
        return ($celsius * 9 / 5) + 32;
    break;
    case 'K':
        return $celsius + 273.15;
    break;

    }
}

echo converterTemperatura(100, 'C', 'F');

?>