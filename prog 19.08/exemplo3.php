<?php
class Ingresso {
    protected $valor;

    function __construct($valor) {
        $this->valor = $valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function getValor() {
        return $this->valor;
    }

    function imprimeValor() {
        echo "Valor do ingresso: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
    }
}

class IngressoVIP extends Ingresso {
    protected $valorAdicional;

    function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    function setValorAdicional($valorAdicional) {
        $this->valorAdicional = $valorAdicional;
    }

    function getValorAdicional() {
        return $this->valorAdicional;
    }

    function getValorTotal() {
        return $this->getValor() + $this->valorAdicional;
    }

    function imprimeValor() {
        echo "Valor do ingresso VIP: R$ " . number_format($this->getValorTotal(), 2, ',', '.') . "<br>";
    }
}

class IngressoNormal extends Ingresso {
    function imprimeDeclaracao() {
        echo "Ingresso Normal<br>";
    }

    function imprimeValor() {
        parent::imprimeValor();
    }
}

class Camarote extends IngressoVIP {
    protected $localizacao;

    function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    function getLocalizacao() {
        return $this->localizacao;
    }

    function imprimeLocalizacao() {
        echo "Localização: " . $this->localizacao . "<br>";
    }
}

class CamaroteInferior extends Camarote {
    function imprimeValor() {
        echo "Valor do Camarote Inferior: R$ " . number_format($this->getValorTotal(), 2, ',', '.') . "<br>";
    }
}

class CamaroteSuperior extends Camarote {
    function imprimeValor() {
        echo "Valor do Camarote Superior: R$ " . number_format($this->getValorTotal(), 2, ',', '.') . "<br>";
    }
}

$ingressoNormal = new IngressoNormal(75);
$ingressoNormal->imprimeDeclaracao();
$ingressoNormal->imprimeValor();
echo "<hr>";

$ingressoVIP = new IngressoVIP(150, 50);
$ingressoVIP->imprimeValor();
echo "<hr>";

$camaroteInferior = new CamaroteInferior(200, 80, "Setor A");
$camaroteInferior->imprimeValor();
$camaroteInferior->imprimeLocalizacao();
echo "<hr>";

$camaroteSuperior = new CamaroteSuperior(200, 160, "Setor C");
$camaroteSuperior->imprimeValor();
$camaroteSuperior->imprimeLocalizacao();
?>