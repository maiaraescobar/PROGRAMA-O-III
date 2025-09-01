
<?php
class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    function setVeiculo($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    function getVeiculo() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Ano: " . $this->ano;
    }

    function exibeDados() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }
}

class Carro extends Veiculo {
    private $portas;

    function __construct($marca, $modelo, $ano, $portas) {
        parent::__construct($marca, $modelo, $ano);
        $this->portas = $portas;
    }

    function setPortas($portas) {
        $this->portas = $portas;
    }

    function getPortas() {
        return $this->portas;
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Portas: " . $this->portas . "<br>";
    }
}

class Moto extends Veiculo {
    private $cilindradas;

    function __construct($marca, $modelo, $ano, $cilindradas) {
        parent::__construct($marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    function setCilindradas($cilindradas) {
        $this->cilindradas = $cilindradas;
    }

    function getCilindradas() {
        return $this->cilindradas;
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Cilindradas: " . $this->cilindradas . "<br>";
    }
}

class Caminhao extends Veiculo {
    private $capacidade;

    function __construct($marca, $modelo, $ano, $capacidade) {
        parent::__construct($marca, $modelo, $ano);
        $this->capacidade = $capacidade;
    }

    function setCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }

    function getCapacidade() {
        return $this->capacidade;
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Capacidade: " . $this->capacidade . "<br>";
    }
}

$carro = new Carro("Toyota", "Corolla", 2015, 4);
$carro->exibeDados();

echo "<br>";

$moto = new Moto("Honda", "CBR500R", 2020, 500);
$moto->exibeDados();

echo "<br>";

$caminhao = new Caminhao("Mercedes-Benz", "Actros", 2010, "20 toneladas");
$caminhao->exibeDados();
?>