<?php
$participantes = [
    ["nome" => "Ana", "pontos"=> 850],
    ["nome" => "João", "pontos"=> 920],
    ["nome" => "Maria", "pontos"=> 780],
    ["nome" => "Júlia", "pontos" => 500],
    ["nome" => "Pedro", "pontos" => 1000]
];
$posicao = 0;
// extração da coluna de pontos 
$pontos  = array_column($participantes, "pontos");
// array_multisort para ordenar o array multidimensional
array_multisort($pontos, SORT_DESC, $participantes);

foreach ($participantes as $participante) {
    $posicao++;
    echo $posicao . "º lugar: " . $participante["nome"] . " - " . $participante["pontos"] . " pontos<br>";
}
?>
