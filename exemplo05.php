<?php

class Funcionario 
{
 public $nome;
 public $salario;   
 public $previdencia;
 public $descontos;
 public $tipoFuncionario;

 function __construct($nome, $salario, $previdencia,) 
  {
     $this->nome = $nome;
     $this->salario = $salario;
     $this->previdencia = $previdencia;
     $this->descontos = $this->calcularDesconto();
     $this->tipoFuncionario = $this->categorizarFuncionario();
  }

  function calcularDesconto() 
  {
     return number_format($this->salario*0.275 + $this->previdencia, 2, ',', '.');
  }
  function categorizarFuncionario(): string 
  {
    $salario = $this->salario;

    if ($salario >= 1000 && $salario <2000) {
        $tipoFuncionario = "Junior";
    } else if ($salario >= 2000 && $salario < 3000) {
        $tipoFuncionario = "Pleno";
    } else if ($salario >= 3000) {
        $tipoFuncionario = "Sênior";
    } else {
        $tipoFuncionario = "Estagiário";
    }

    return $tipoFuncionario;
  }
  
  }
$joao = new Funcionario('João Filho', 1000, 100);
$maria = new Funcionario('Maria Rute', 2000, 200);
$jose = new Funcionario('José Salgado', 3000, 300);

echo "Funcionari@ $joao->nome e $joao->tipoFuncionario e o Valor do desconto e
de R$ $joao->descontos. <br>";

echo "Funcionári@ $maria->nome e $maria->tipoFuncionario e o Valor do desconto
é de R$ $maria->descontos. <br>";

echo "Funcionari@ $jose->nome é $jose->tipoFuncionario e o Valor do desconto é
de R$ $jose->descontos. <br>";