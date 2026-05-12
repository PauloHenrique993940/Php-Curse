<?php
$carros = array(
    'vw'        => "Fusca",
    'chevrolet' => "Monza",
    'ford'      => "Passat",
    'fiat'      => "Uno",
    'hyundai'   => "HB20"

);

//Segunda Forma
$carros = [
    'vw'        => "Fusca",
    'chevrolet' => "Monza",
    'ford'      => "Passat",
    'fiat'      => "Uno",
    'hyundai'   => "HB20"
];

print_r($carros); // Imprime o array completo
//adiciona elemento ao array
array_push($carros, "Gol"); // Adiciona o elemento "Gol" ao array
array_push($carros, "Corsa");
array_push($carros, "Celta"); // Adiciona o elemento "Celta" ao array


print_r($carros); // Imprime o array completo após adicionar o elemento

//removendo elemento do array
array_pop($carros); // Remove o último elemento do array
$ultimoElementoCarros = array_pop($carros); // Remove e retorna o último elemento do array
echo "O último elemento removido foi: " . $ultimoElementoCarros; // Imprime o último elemento removido
$qtElementosCarros = count($carros);
echo "<br>";
echo "A quantidade de elementos no array é: " . $qtElementosCarros; // Imprime a quantidade de elementos no array

//arrays multidimensionais

$frutas = array(
    "vermelhas" => array(
        "melancia",
        "cereja",
        "framboesa",
        "morango"
    ),

    "citricas" => array(
        "laranja",
        "limao",
        "abacaxi",
        "mexerica"
    ),
);

print_r($frutas); // Imprime o array multidimensional completo
echo "<br>";



?>