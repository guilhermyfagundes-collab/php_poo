<?php

function calcularDesconto($salario, $previdencia) {
    return number_format($salario * 0.275 + $previdencia, 2, ',', '.');
}

$joaoNome = "João Filho";
$joaoDescontos = calcularDesconto(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDesconto(2000, 200);

$joseNome = "José Salgado";
$joseDescontos = calcularDesconto(3000, 300);

echo "O Valor do desconto de $joaoNome é de R$ $joaoDescontos. <br>";
echo "O Valor do desconto de $mariaNome é de R$ $mariaDescontos. <br>";
echo "O Valor do desconto de $joseNome é de R$ $joseDescontos. <br>";