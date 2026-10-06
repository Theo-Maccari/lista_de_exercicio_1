<?php

require_once "funcoes.php";

echo "<h1>Funções</h1>";

$imc = calcularIMC(65, 1.75);
echo "IMC: " . $imc . "<br>";

$validarEmail = validarEmail("exemplo@email.com");
if ($validarEmail) {
    echo "Email válido<br>";
} else {
    echo "Email inválido<br>";
}

$senha = gerarSenha(10);
echo "Senha gerada: " . $senha . "<br>";

$ContarVogais = contarVogais("Exemplo de texto");
echo "Quantidade de vogais: " . $ContarVogais . "<br>";

$inverterTexto = inverterTexto("Exemplo de texto");
echo "Texto invertido: " . $inverterTexto . "<br>";

$idade = calcularIdade(2009);
echo "Idade: " . $idade . "<br>";

$converterMoeda = converterMoeda(100, 5.25);
echo "Valor convertido: R$ " . $converterMoeda . "<br>";

$formatarTelefone = formatarTelefone("11987654321");
echo "Telefone formatado: " . $formatarTelefone . "<br>";

$gerarSaudacao = gerarSaudacao(10);
echo "Saudação: " . $gerarSaudacao . "<br>";

$validarSenha = validarSenha("Senha123!");
if ($validarSenha) {
    echo "Senha válida<br>";
} else {
    echo "Senha inválida<br>";
}

?>