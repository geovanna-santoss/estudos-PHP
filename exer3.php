<!-- 
Crie uma função chamada `areaRetangulo` que receba dois parâmetros (base e altura) e **retorne** o valor da área calculada (base × altura).
Depois:
- Chame a função três vezes, com valores diferentes, guardando cada resultado em uma variável.
- Exiba os três resultados usando `echo`.
- Modifique a função para que, se algum dos parâmetros for negativo, ela retorne a string `"Valores inválidos"` em vez de calcular a área. -->

<?php 
function areaRetangulo($base, $altura) {
    if ($base < 0 || $altura < 0) {
        return "Valores inválidos";
    }
    return $base * $altura;
}
$area1 = areaRetangulo(5, 9);
$area2 = areaRetangulo(3, 7);
$area3 = areaRetangulo(2, -8);

echo "Área 1: " . $area1 . "<br>";
echo "Área 2: " . $area2 . "<br>";
echo "Área 3: " . $area3 . "<br>";
?>
