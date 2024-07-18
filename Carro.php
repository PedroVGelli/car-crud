<?php
// Classe Carro que representa um carro
class Carro {
    private $marca;
    private $modelo;
    private $fabricante;
    private $cor;

    // Construtor da classe
    public function __construct($marca, $modelo, $fabricante, $cor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->fabricante = $fabricante;
        $this->cor = $cor;
    }

    // Getters para acessar as propriedades do carro
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getfabricante() {
        return $this->fabricante;
    }

    public function getCor() {
        return $this->cor;
    }
}
?>
