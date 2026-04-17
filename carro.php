<?php
class Carro {

    public $modelo;
    public $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function setVelocidade($novaVelocidade){
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Velocidade Invalida : $novaVelocidade<br>";
        }
    }
}

$meuCarro = new Carro("Senai-Mobile", 0);

$meuCarro->getVelocidade(5000);
$meuCarro->setVelocidade(-60);   

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>
