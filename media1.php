<?php
//media de 2 notas

    $notas = array(
        array("Joao", 8.7, 9.4),
        array("Maria", 9.2, 8.5),
    );

    function calcular_media($nota1, $nota2) {
        return ($nota1 + $nota2) / 2;
    }

    function multiplicarNotas($n1,  $n2) {
        return $n1 * $n2;
    }

    foreach ($notas as $aluno) {
        $nome = $aluno[0];
        $nota1 = $aluno[1];
        $nota2 = $aluno[2];

        $media = calcular_media($nota1, $nota2);

        echo "Aluno: " . $nome . "<br>";
        echo "Média: " . number_format($media, 2) . "<br><br>";
    }


    foreach ($notas as $student){
        $nome = $student[0];
        $n1 = $student[1];
        $n2 = $student[2];
        
        $multiplicacao = multiplicarNotas($n1, $n2);

        echo "Aluno: " . $nome . "<br>";
        echo "Multiplicação: " . number_format($multiplicacao, 2) . "<br><br>";
    }




?>