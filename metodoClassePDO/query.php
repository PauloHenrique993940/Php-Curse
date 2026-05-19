<?php
   require_once 'metodoclasse.php';
   $conexaoObj = new Conexao();
   $pdo = $conexaoObj->connection();
   //metodo query é utilizado para consultas, ou seja, para recuperar dados do banco de dados, diferente do método exec, que é utilizado para operações de inserção, atualização e exclusão de dados.
   $instrucaoSQL = "Select nome, cpf, telefone from Cliente";
   // a variavel $dsn,  abvaixo, corresponde á instalçao da classe PDO, inicializada na conexão com bd;
   $resultSet = $pdo->query($instrucaoSQL);
   while ($row = $resultSet->fetch()) {
      echo $row["nome"] . "\t";
      echo $row["cpf"] . "\t";
      echo $row["telefone"] . "\t";
   }
   //Veja o exemplo de sua utilização retornando um array associativo:
   while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)){
      echo $row["nome"] . "\t";
      echo $row["cpf"] . "\t";
      echo $row["telefone"] . "\t";
   }




















?>