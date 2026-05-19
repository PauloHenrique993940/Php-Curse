<?php
   require_once 'metodoclasse.php';
   $conexaoObj = new Conexao();
   $pdo = $conexaoObj->connection();

   $qtdeLinhasAfetadas = $pdo->exec("Delete From Cliente Where codigo_cliente = 1");
   echo "Quantidade de linhas afetadas: " . $qtdeLinhasAfetadas;
?>