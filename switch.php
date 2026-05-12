<?php
    $dia = 3;
    $numero = 10;
    $numero2 = 20;
    switch ($dia) {
        case 1:
            echo "Hoje é segunda-feira.";
            break;
        case 2:
            echo "Hoje é terça-feira.";
            break;
        case 3:
            echo "Hoje é quarta-feira.";
            break;
        case 4:
            echo "Hoje é quinta-feira.";
            break;
        case 5:
            echo "Hoje é sexta-feira.";
            break;
        case 6:
            echo "Hoje é sábado.";
            break;
        case 7:
            echo "Hoje é domingo.";
            break;
        default:
            echo "Número do dia inválido.";
    }


    //Operador ternário

    $resultado = ($numero > $numero2) ? "Número 1 é maior que Número 2." : "Número 1 é menor ou igual a Número 2.";
    echo $resultado;
?>