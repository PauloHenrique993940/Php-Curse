<?php
//Operadores em PHP são símbolos ou palavras reservadas que realizam operações em variáveis e valores. Eles podem ser classificados em várias categorias, como operadores aritméticos, de comparação, lógicos, de atribuição, entre outros. Aqui estão alguns exemplos de operadores comuns em PHP:

//Operadores Aritméticos
$sum = 5 + 3; // Adição
$difference = 10 - 4; // Subtração
$product = 6 * 7; // Multiplicação
$quotient = 15 / 3; // Divisão
$modulus = 10 % 3; // Módulo (resto da divisão)
$exponentiation = 2 ** 3; // Exponenciação (2 elevado a 3)
echo "Soma: $sum\n";
echo "Diferença: $difference\n";
echo "Produto: $product\n";
echo "Quociente: $quotient\n";
echo "Módulo: $modulus\n";
echo "Exponenciação: $exponentiation\n";

//Operadores de atribuição
$var1 = 4; //a variável foi inicializada com o valor de 4
$var1 += 2; //com a utilização da combinação de operadores a variável $var1 passou a ter o valor de 6 (4 + 2)
$var1 *= 2; //com a utilização da combinação de operadores a variável $var1 passou a ter o valor de 12 (4 + 2) * 2

$var2 = "Programação";
$var2 .= " com PHP"; //com a utilização da combinação de operadores a variável $var2 passou a ter o conteúdo "Programação com PHP"
echo "$var2\n";

$var = ($var4 = "Copie esses códigos") . " e pratique seus conhecimentos!" ;
/*
No exemplo acima o conteúdo da variável $var3 é igual a "Copie esses códigos e pratique seus conhecimentos!"
Já a variável $var4 possui o conteúdo "Copie esses códigos"
*/



?>