<?php
    //Arrays e Vetores

    //Declarando um array vazio
    $arrayVazio = [];

    //Declarando um array com valores
    $frutas = ["Maçã", "Banana", "Laranja", "Abacaxi"];

    $carros = Array("Fusca", "Monza", "Passat");
    //Terceira forma de declaração e atribuição de valores
    $carros[0] = "Fusca";
    $carros[1] = "Monza";
    $carros[2] = "Passat";


    //Quarta forma de declaração e atribuição de valores
    $carros[] = "Fusca";
    $carros[] = "Monza";
    $carros[] = "Passat";

    //Acessando elementos do array
    echo $frutas[0]; // Imprime "Maçã"
    echo $carros[1]; // Imprime "Monza"

    //Modificando um elemento do array
    $frutas[2] = "Melancia"; // Modifica o valor na posição 2 para "Melancia"
    echo $frutas[2]; // Imprime "Melancia"

    //Contando o número de elementos em um array
    $quantidadeFrutas = count($frutas);
    echo "O número de frutas é: " . $quantidadeFrutas; // Imprime o número de frutas

    


?>