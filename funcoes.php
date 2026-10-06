<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenha($tamanho) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%¨&*-_=+\|,<.>?/';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $senha;
}

function contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array(strtolower($texto[$i]), $vogais)) {
            $contador++;
        }
    }
    return $contador;
}

function inverterTexto($texto){

$invertido = strrev($texto);
return $invertido;

}

function calcularIdade($anoNascimento) {
    return date("Y") - $anoNascimento;
}

function converterMoeda($valor, $taxa) {
    return $valor * $taxa;
}

function formatarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    if (strlen($telefone) == 10) {
        return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 4) . '-' . substr($telefone, 6);
    } elseif (strlen($telefone) == 11) {
        return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7);
    } else {
        return "Número de telefone inválido";
    }
}

function gerarSaudacao($hora) {
    if ($hora < 12) {
        return "Bom dia!";
    } elseif ($hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenha($senha) {
    if (strlen($senha) < 8) {
        return false;
    }
    if (!preg_match('/[A-Z]/', $senha)) {
        return false;
    }
    if (!preg_match('/[a-z]/', $senha)) {
        return false;
    }
    if (!preg_match('/[0-9]/', $senha)) {
        return false;
    }
    if (!preg_match('/[\W]/', $senha)) {
        return false;
    }
    return true;
}

?>