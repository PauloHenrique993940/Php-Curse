<?php

try {
   $dsn = "mysql:host=localhost;dbname=meubanco;charset=utf8";
   $usuario = "root";
   $senha = "";

   $pdo = new PDO($dsn, $usuario, $senha);

   // Configurar tratamento de erros
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   echo "Conexão realizada com sucesso!";
   echo "<br>";
}  catch (PDOException $e) {
   echo "Erro na conexão: " . $e->getMessage();
}

?>