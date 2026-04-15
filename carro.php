<?php
class Carro {
    public $modelo;
    private $velocidade;

    public function __construct($modelo) {
        $this->modelo = $modelo;
        $this->velocidade = 0; // começa parado
    }

    // 🚪 Getter
    public function getVelocidade() {
        return $this->velocidade;
    }

    // 🚗 Método para acelerar
    public function acelerar($incremento) {
        $novaVelocidade = $this->velocidade + $incremento;

        if ($novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
        } else {
            $this->velocidade = 200;
            echo "⚠️ Limite máximo atingido (200 km/h)<br>";
        }
    }

    // 🛑 Método para frear
    public function frear($reducao) {
        $novaVelocidade = $this->velocidade - $reducao;

        if ($novaVelocidade >= 0) {
            $this->velocidade = $novaVelocidade;
        } else {
            $this->velocidade = 0;
            echo "⚠️ O carro já está parado<br>";
        }
    }
}

// --- TESTE ---
$carro = new Carro("Senai Turbo");

// Acelerando
$carro->acelerar(50);
$carro->acelerar(180); // ultrapassa limite

// Freando
$carro->frear(30);
$carro->frear(300); // tenta ir abaixo de 0

echo "Modelo: " . $carro->modelo . "<br>";
echo "Velocidade atual: " . $carro->getVelocidade() . " km/h";
?>