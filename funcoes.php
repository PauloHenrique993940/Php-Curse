<?php 
    $num = 10;
    $num2 = 15;

    $num3 = soma($num, $num2);
    imprimir_resultado($num3);

    function soma($a, $b) {
        return $a + $b;
    }

    function imprimir_resultado($resultado) {
        echo "O resultado da soma é: " . $resultado . "<br>";
    }

    function multiplicacao($n, $n2) {
        $resultadoMult = $n * $n2;
        return "O resultado da multiplicação é: " . $resultadoMult;
    }

    echo multiplicacao(70, 90);
?>