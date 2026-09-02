<?php
$a = "10";
$b = 10;
$c = 10;

// Gabarito antes da execução
// 1. `$a == $b` - true
// 2. `$a === $b`- false
// 3. `$b == $c` - true 
// 4. `$b === $c`- true

echo "1. \$a == \$b: ";
var_dump($a == $b);
echo "2. \$a === \$b: ";
var_dump($a === $b);
echo "3. \$b == \$c: ";
var_dump($b == $c);
echo "4. \$b === \$c: ";
var_dump($b === $c);

// ENUNCIADO: Depois, escreva os `echo` correspondentes no arquivo, execute e confira suas previsões. Ao final, escreva um comentário no código explicando, com suas próprias palavras, a diferença entre `==` e `===` em PHP.
// Quando usamos == , apenas os valores são comparados ignorando seus tipos (então o tipo string "10" e o tipo int 10 seriam iguais). Já com ===, é comparado o valor e tipo das variáveis, então o resultado da comparação vai ser verdadeiro apenas se os valores e tipos forem iguais.
?>
