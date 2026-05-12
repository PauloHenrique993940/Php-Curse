<?php
    // Cálculo de média com funções

    $alunos = array(
        array("Joao", 8.7, 9.4),
        array("Maria", 9.2, 8.5),
        array("Pedro", 7.5, 8.0),
        array("Ana", 9.0, 9.5)
    );

    function calcular_media($nota1, $nota2) {
        return ($nota1 + $nota2) / 2;
    }

    // Percorre o array de alunos
    foreach ($alunos as $aluno) {
        $nome = $aluno[0];
        $nota1 = $aluno[1];
        $nota2 = $aluno[2];

        $media = calcular_media($nota1, $nota2);

        echo "Aluno: " . $nome . "<br>";
        echo "Média: " . number_format($media, 2) . "<br><br>";
    }
?>