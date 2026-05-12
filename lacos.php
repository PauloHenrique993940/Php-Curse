<?php
    //laçoes de repetição
    //while , do while  e foreach
    $i = 2;
    while ($i <= 10) {
        echo "$i ";
        $i += 2; // Incrementa $i em 2 a cada iteração
        echo "\n"; // Adiciona uma quebra de linha para melhor visualização
    
    };
    /* Sintaxe altenativa  */
    $n = 2;
    while ($n <= 20):
        echo $n;
        $n += 2;
        echo "\n";
    endwhile;
    
    //usando o do while
    $numero = 1;
    do {
        echo $numero;
        $numero++;
        echo "\n";
    }while ($numero <= 10);

    //usando for
    $j = 1;
    for ($j = 1; $j <= 10; $j++) {
        echo $j;
        echo "\n";
    };

    //usando foreach
    $array = ["Maçã", "banana", "laranja"];
    foreach ($array as $fruta) { // Itera sobre cada elemento do array e atribui à variável $fruta
        echo $fruta;
        echo "\n";
    }






?>