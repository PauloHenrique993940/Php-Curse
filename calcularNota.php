<?php
//calcular duas nota de um aluno

$aluno = array("JoÃO", 8.8, 9.5);


function calc_media($nota1, $nota2)
{
    return ($nota1 + $nota2) / 2;
}


//CHAMADA DE FUNÇÃO
$media = calc_media($aluno[1], $aluno[2]);

echo $aluno[0] . " tem a média: " . $media;

function xpto($numero)
{
    return $numero % 2 == 0;
}

function abcd($inicio, $fim)
{
    for ($i = $inicio; $i <= $fim; $i++) {
        if (xpto($i)) {
            echo $i . " ";
        }
    }
}

abcd(1, 10);


?>