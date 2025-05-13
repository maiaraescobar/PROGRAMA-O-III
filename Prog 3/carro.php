<?php
class carro{
  private $modelo;
  private $cor;
  private $ano;

  public function __construct($modelo, $cor, $ano){
    $this-> modelo= $modelo;
    $this-> cor= $cor;
    $this-> ano= $ano;

  }



public function getModelo(){
    return $this->modelo;
}

public function getCor(){
    return $this->cor;
}

public function getAno(){
    return $this->ano;
}

public function setModelo($modelo){
    return $this = $modelo;
}

public function setCor($cor){
    return $this = $cor;
}

public function setAno($ano){
    return $this = $ano;
}

}



