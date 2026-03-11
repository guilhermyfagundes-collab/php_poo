<?php
class CalculadoraIMC {
    private $peso;
    private $altura;

    public function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC() {
        return number_format($this->peso / ($this->altura * $this->altura), 2, ',', '.');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    try {
        $calculadora = new CalculadoraIMC($peso, $altura);
        $imc = $calculadora->calcularIMC();

        echo "<h2>Resultado</h2>";
        echo "Seu IMC é: " . $imc;
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC - POO</title>
</head>
<body>
    <h1>Calculadora de IMC - POO</h1>

    <form action="calculadora_imc_poo.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.02" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.02" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

</body>
</html>