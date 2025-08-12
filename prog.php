<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel;

    public function ligarLimpador() {
        echo "Limpador ligado";
    }

    public function mostrarCombustivel() {
        echo "Tipo de combustível: " . $this->tipoCombustivel;
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!";
    }

    public function andar() {
        echo "Moto está em movimento";
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!";
    }
}

class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada";
    }
}

$caminhao = new Caminhao();
$caminhao->modelo = "Ford Cargo";
$caminhao->cor = "Preto";
$caminhao->ano = 2020;
$caminhao->andar();
echo "<br>";
$caminhao->carregarCarga();
echo "<br>";
$caminhao->parar();
echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->andar();
echo "<br>";
$moto->darGrau();
echo "<hr>";

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->tipoCombustivel = "Gasolina";
$carro->andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
$carro->mostrarCombustivel();
echo "<hr>";

$carro1 = new Carro();
$carro1->modelo = "Gol";
$carro1->cor = "Vermelho";
$carro1->ano = 2018;
$carro1->andar();

$carro2 = new Carro();
$carro2->modelo = "Palio";
$carro2->cor = "Azul";
$carro2->ano = 2015;
$carro2->parar();

$moto1 = new Moto();
$moto1->modelo = "Honda Biz";
$moto1->cor = "Azul";
$moto1->ano = 2017;
$moto1->andar();

$moto2 = new Moto();
$moto2->modelo = "Yamaha";
$moto2->cor = "Vermelho";
$moto2->ano = 2019;
$moto2->darGrau();
echo "<hr>";

$carroEletrico = new CarroEletrico();
$carroEletrico->modelo = "Tesla";
$carroEletrico->cor = "Branco";
$carroEletrico->ano = 2022;
$carroEletrico->tipoCombustivel = "Elétrico";
$carroEletrico->andar();
echo "<br>";
$carroEletrico->ligarLimpador();
echo "<br>";
$carroEletrico->mostrarCombustivel();
echo "<br>";
$carroEletrico->carregarBateria();
?>

