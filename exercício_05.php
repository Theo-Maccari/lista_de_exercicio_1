<?php

function analisarTexto($texto) {

$Palavras = str_word_count($texto);
$Caracteres = mb_strlen($texto);
$Vogais = preg_match_all('/[aeiou]/i', $texto);
$Consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto);

return [

    'Palavras' => $Palavras,
    'Caracteres' => $Caracteres,
    'Vogais' => $Vogais,
    'Consoantes' => $Consoantes

];

$resultado = analisarTexto("melhor código do mundo");

echo $resultado['Palavras'];
echo $resultado['Caracteres'];
echo $resultado['Vogais'];
echo $resultado['Consoantes'];

}

?>