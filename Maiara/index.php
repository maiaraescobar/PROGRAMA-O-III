<?php
class Produto {
    $nome;
    $preco;
    $quantidade;

    public function exibirInformacoes(){
        echo "Nome: {$this->nome}, Preço: {$this->preco}, Quantidade: {$this->quantidade}<br>";
    }
}
?>





<?php


$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = 2.5;
$produto1->quantidade = 10;

$produto2 = new Produto();
$produto2->nome = "Lápis";
$produto2->preco = 1.5;
$produto2->quantidade = 20;

$produto1->exibirInformacoes();
$produto2->exibirInformacoes();
?>





<?php
function mostrarMediaPrecos($produto1, $produto2) {
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "A média dos preços dos produtos é: {$media}<br>";
}
mostrarMediaPrecos($produto1, $produto2);
?>
