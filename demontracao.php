<?php
   //Dsemostração de array multidimensional
    $alunos = array(
        array(
            "Joao", 8.7, 9.4
        ),
        array(
            "Maria", 9.2, 8.5
        ),
        array(
            "Pedro", 7.5, 8.0
        ),
        array(
            "Ana", 9.0, 9.5
        ),


    );
    echo $alunos[0][0] . ": P1 " . $alunos[0][1] . " P2 " . $alunos[0][2] . "<br>"; // Imprime o nome e as notas do primeiro aluno
    echo $alunos[1][0] . ": P1 " . $alunos[1][1] . " P2 " . $alunos[1][2] . "<br>"; // Imprime o nome e as notas do segundo aluno
    echo $alunos[2][0] . ": P1 " . $alunos[2][1] . " P2 " . $alunos[2][2] . "<br>"; // Imprime o nome e as notas do terceiro aluno
    echo $alunos[3][0] . ": P1 " . $alunos[3][1] . " P2 " . $alunos[3][2] . "<br>"; // Imprime o nome e as notas do quarto aluno

?>





















?>