<!-- <?php
$diaDaSemana = 2;
switch($diaDaSemana){
    case 1:
        echo "Segunda-feira: Frango grelhado";
        break;
    case 2:
        echo "Terça-feira: Fricasse";
        break;
    case 3:
        echo "Quarta-feira: Feijoada";
        break;
    case 4:
        echo "Quinta-feira: Carne de panela";
        break;
    case 5:
        echo "Sexta-feira: Strogonoff";
        break;
    case 6:
    case 7:
        echo "Restaurante fechado";
        break;
    default:
        echo "Dia inválido";
        break;
}
?> -->
<!-- ENUNCIADO: Depois de fazer funcionar, remova propositalmente um `break` de dentro de um dos `case` e observe o que muda no comportamento do programa. Escreva um comentário explicando o que aconteceu e por quê. -->
<!-- O case que teve seu break removido executou o código do próximo case (mesmo quando não era verdadeiro), porque o break é o responsável por interromper a execução de um case e sem ele o programa continua até encontrar o final ou outro break. -->
