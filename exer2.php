<?php
// ENUNCIADO: Escreva um script PHP que utilize um laço `for` para exibir na tela todos os múltiplos de 3 entre 3 e 30 (incluindo os dois extremos), separados por espaço.
// Em seguida, modifique o seu próprio código para que ele exiba, na mesma execução, também a **quantidade total** de múltiplos encontrados.

$multiplos     = range(3, 30);
$somaMultiplos = [];

// Além de acrescentar mais uma volta ao $i para passarmos para o próximo índice da variável, o fim do loop acontecerá quando o valor de $i chegue ao valor de números presentes em $multiplos(declarado pelo count na expressão);
// Para cada indice em $multiplos o for executa a condição para verificar se o número é divisivel por 3(no caso, vendo se o módulo(resto) é ou não igual a 0), e caso seja adiciona ele na lista de $somaMultiplos e o exibe na tela.
for($i = 0; $i < count($multiplos); $i++){
    if ($multiplos[$i]%3==0){
        echo $multiplos[$i]." ";
        $somaMultiplos[] = $multiplos[$i];
    }
}
echo "<br>";
// array_sum para somar todos os valores do array
echo array_sum($somaMultiplos);
?>
