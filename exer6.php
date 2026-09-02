<?php
// ENUNCIADO: Escreva um `foreach` que percorra esse array e exiba todos os itens **exceto** `"Cabo HDMI"`, sem removê-lo do array original.

$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];

foreach ($itens as $item){
    if ($item !== "Cabo HDMI") {
        echo $item . " - ";
    }
};
?>
