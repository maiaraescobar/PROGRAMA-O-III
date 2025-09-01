<?php
class Funcionario {
    private $nome;
    protected $salario;

    function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function setFuncionario($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function getFuncionario() {
        return $this->nome . ", " . $this->salario;
    }

    function addAumento(float $valor) {
        $this->salario += $valor;
    }

    function ganhoAnual() {
        return $this->salario * 12;
    }

    function exibeDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: " . $this->salario . "<br>";
        echo "Ganho Anual: " . $this->ganhoAnual() . "<br>";
    }
}

class Assistente extends Funcionario {
    protected $matricula;

    function __construct($nome, $salario, $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    function exibeDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: " . $this->salario . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
    }
}

class Assistente_Tecnico extends Assistente {
    private $bonus;

    function __construct($nome, $salario, $matricula, $bonus = 0) {
        parent::__construct($nome, $salario, $matricula);
        $this->bonus = $bonus;
    }

    function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    function ganhoAnual() {
        return ($this->salario + $this->bonus) * 12;
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Bônus: " . $this->bonus . "<br>";
        echo "Ganho Anual com bônus: " . $this->ganhoAnual() . "<br>";
    }
}

class Assistente_Administrativo extends Assistente {
    private $ganhoTurnoExtra;

    function __construct($nome, $salario, $matricula, $ganhoTurnoExtra = 0) {
        parent::__construct($nome, $salario, $matricula);
        $this->ganhoTurnoExtra = $ganhoTurnoExtra;
    }

    function ganhoAnual() {
        return ($this->salario + $this->ganhoTurnoExtra) * 12;
    }

    function exibeDados() {
        parent::exibeDados();
        echo "Ganho Turno Extra: " . $this->ganhoTurnoExtra . "<br>";
        echo "Ganho Anual com turno extra: " . $this->ganhoAnual() . "<br>";
    }
}

$Funcionario = new Funcionario("Marcos Silva", 3500);
echo "Funcionário:<br>";
$Funcionario->exibeDados();
$Funcionario->addAumento(500);
echo "Após aumento:<br>";
$Funcionario->exibeDados();
echo "<hr>";

$Assistente = new Assistente("Fernada Costa", 2500, "AS1001");
echo "<br>Assistente:<br>";
$Assistente->exibeDados();
$Assistente->addAumento(300);
echo "Após aumento:<br>";
$Assistente->exibeDados();
echo "<hr>";

$Assistente_Tecnico = new Assistente_Tecnico("Robert Alves", 2500, "TEC2002", 200);
echo "<br>Assistente Técnico:<br>";
$Assistente_Tecnico->exibeDados();
echo "<hr>";

$Assistente_Administrativo = new Assistente_Administrativo("Juliana Borges", 1900, "ADM3003", 150);
echo "<br>Assistente Administrativo:<br>";
$Assistente_Administrativo->exibeDados();
?>

