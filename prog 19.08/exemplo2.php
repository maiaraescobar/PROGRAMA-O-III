
<?php
// Exercício a
class Animal {
    protected $nome;
    protected $raca;

    function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    function setAnimal($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    function getAnimal() {
        return $this->nome . ", " . $this->raca;
    }

    function exibeDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Raça: " . $this->raca . "<br>";
    }

    function caminha() {
        echo $this->nome . " está caminhando.<br>";
    }
}

class Cachorro extends Animal {
    function late() {
        echo "O cachorro " . $this->nome . " está latindo.<br>";
    }
}

class Gato extends Animal {
    function mia() {
        echo "A gata " . $this->nome . " está miando.<br>";
    }
}

$Cachorro = new Cachorro("Scott", "pinscher");
$Cachorro->exibeDados();
$Cachorro->caminha();
$Cachorro->late();
echo "<hr>";

$Gato = new Gato("Frida", "Frajola");
$Gato->exibeDados();
$Gato->caminha();
$Gato->mia();
echo "<br><hr><br>";

// Exercício b
class Pessoa {
    protected $nome;
    protected $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function setPessoa($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function getPessoa() {
        return $this->nome . ", " . $this->idade;
    }

    function exibeDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
    }
}

class Rica extends Pessoa {
    private $dinheiro;

    function fazCompras() {
        echo $this->nome . " está fazendo compras.<br>";
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Situação financeira: Rica<br>";
    }
}

class Pobre extends Pessoa {
    private $trabalho;

    function trabalha() {
        echo $this->nome . " está trabalhando.<br>";
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Situação financeira: Pobre<br>";
    }
}

class Miseravel extends Pessoa {
    function mendiga() {
        echo $this->nome . " está mendigando.<br>";
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Situação financeira: Miserável<br>";
    }
}

$Rica = new Rica("Madalena", 50);
$Rica->exibeDados();
$Rica->fazCompras();
echo "<hr>";

$Pobre = new Pobre("Matheus", 25);
$Pobre->exibeDados();
$Pobre->trabalha();
echo "<hr>";

$Miseravel = new Miseravel("João", 59);
$Miseravel->exibeDados();
$Miseravel->mendiga();
?>
