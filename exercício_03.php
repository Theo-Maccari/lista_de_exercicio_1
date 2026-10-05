<?php

function mascararCpf($cpf) {

    $ultimosDigitos = substr($cpf, -4);
    $mascara = "******" . $ultimosDigitos;
    return $mascara;

}

$cpf = "12345678901";

echo "CPF original: $cpf <br>";
echo "CPF mascarado: " . mascararCpf($cpf);

?>