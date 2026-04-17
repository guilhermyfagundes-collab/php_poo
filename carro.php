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
            echo "continue nesta Velocidade<br>";
        } else {
            echo "Velocidade Invalida <br>";
        }
    }
}

$meuCarro = new Carro("Senai-Mobile", 0);

$meuCarro->setVelocidade(200);
$meuCarro->getVelocidade(0);   

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>