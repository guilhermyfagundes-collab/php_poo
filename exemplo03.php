<?php

function calcularDesconto($salario, $previdencia) {
    return number_format($salario * 0.275 + $previdencia, 2, ',', '.');
}

$funcionarios = array (3);
$funcionarios[0] = array('Joao filho', 1000, 100);
$funcionarios[1] = array('Maria rute', 2000, 200);
$funcionarios[2] = array('Jose salgado', 3000, 300);

for ($ = 0; $i < 3; $i++) {
    $nome = $funcionarios[$i][0];
    $desconto = calcularDesconto($funcionarios[$i][1], $funcionarios[$i][2]);
    echo "O Valor do desconto de $nome é de R$ $desconto. <br>";
}

