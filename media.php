<?php

    //calculo media dos alunos


    $notasDosAlunos = [7.5, 8.0, 5.0, 6.5, 4.0, 9.0, 3.5, 7.0, 8.0];
    /*

    foreach ($notasDosAlunos as $media)://
        if ($media >= 6.0)://
            echo "Alunos aprovado com a nota: $media\n";
        else:
            echo "Alunos reprovados: $media\n";
        endif;
    endforeach;
    */

    //calcular a soma das notas dos alunos
    $soma = 0;
    foreach ($notasDosAlunos as $i){
        $soma += $i;
    }

    $mediaFinal = $soma  / 10;
    If ($mediaFinal < 6.0){
        echo "A média final dos alunos é: " .$mediaFinal. "\n";
        echo "Alunos reprovados.";
    } else {
        echo "A média final dos alunos é: " .$mediaFinal. "\n";
        echo "Alunos aprovados. Acima da média.";;
    }


    
    echo "A média final dos alunos é: $mediaFinal\n";
?>
