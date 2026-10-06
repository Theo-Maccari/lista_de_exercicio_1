<?php

function criptografar mensagem($texto,$deslocamento) {
    $resultado = "";
    for ($i = 0; $i < strlen($texto); $i++) {
        $charactere = $texto[$i];
        if (ctype_alpha($charactere)) {
            $codigoAscii = ord($charactere);
            $codigoAscii += $deslocamento;
            if (ctype_upper($char)) {
                if ($codigoAscii > ord('Z')) {
                    $codigoAscii -= 26;
                }
            } else {
                if ($codigoAscii > ord('z')) {
                    $codigoAscii -= 26;
                }
            }
            $resultado .= chr($codigoAscii);
        } else {
            $resultado .= $char;
        }
    }
    return $resultado;
}

function descriptografarMensagem($texto, $deslocamento) {
    return criptografarMensagem($texto, -$deslocamento);
}

$mensagemOriginal = "Mensagem secreta";
$deslocamento = 3;

$criptografada = criptografarMensagem($mensagemOriginal, $deslocamento);
$descriptografada = descriptografarMensagem($criptografada, $deslocamento);

echo "Mensagem original: " . $mensagemOriginal;
echo "Mensagem criptografada: " . $criptografada;
echo "Mensagem descriptografada: " . $descriptografada;

?>