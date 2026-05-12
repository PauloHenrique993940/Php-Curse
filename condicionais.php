
<?php
    $var1 = 10;
    $var2 = 20;
    $idade = 18;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }

    if ($var1 > $var2) {
        echo "Var1 é maior que Var2.";
    } elseif ($var1 < $var2) {
        echo "Var1 é menor que Var2.";
    } else {
        echo "Var1 é igual a Var2.";
    }
?>
