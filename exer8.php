<?php

class Veiculo{
    private $quilometragem = 0;

    function rodar($km){
        $this->quilometragem += $km;
    }

    function exibirQuilometragem(){
        echo "Quilometragem: " . $this->quilometragem . " km";
    }
}

$veiculo1 = new Veiculo;
$veiculo1->rodar(100);
$veiculo1->rodar(150);
$veiculo1->exibirQuilometragem();

$novoVeiculo = new Veiculo;
$novoVeiculo->exibirQuilometragem();
?>
