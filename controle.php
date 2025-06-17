<?php
// Criando a classe ControleVideoGame
class ControleVideoGame {
    // Atributos privados (não podem ser acessados de fora)
    private $ligado = false;
    private $energia = 100;

    // Método público para ligar o controle
    public function ligar() {
        $this->ligado = true;
        echo "Controle ligado.\n";
    }

    // Método público para apertar o botão A
    public function apertarBotaoA() {
        if ($this->ligado && $this->energia >= 10) {
            echo "Botão A foi pressionado!\n";
            $this->energia -= 10;
        } else {
            echo "Não é possível usar. Controle desligado ou sem energia suficiente.\n";
        }
    }

    // Método público para apertar o botão B
    public function apertarBotaoB() {
        if ($this->ligado && $this->energia >= 5) {
            echo "Botão B foi pressionado!\n";
            $this->energia -= 5;
        } else {
            echo "Não é possível usar. Controle desligado ou sem energia suficiente.\n";
        }
    }

    // Método público para ver a energia restante
    public function mostrarEnergia() {
        echo "Energia atual: $this->energia%\n";
    }
}

// Criando o objeto controle
$controle = new ControleVideoGame();

// Tentando usar o botão antes de ligar
$controle->apertarBotaoA(); // Erro esperado

// Ligando o controle
$controle->ligar();

// Usando o botão A
$controle->apertarBotaoA(); // Funciona

// Mostrando energia
$controle->mostrarEnergia(); // Mostra 90

// Usando o botão B
$controle->apertarBotaoB(); // Funciona

// Mostrando energia
$controle->mostrarEnergia(); // Mostra 95

?>


