<?php
   //Método de classe PDO
   class Conexao{
      private $host = "localhost";
      private $dbname = "test";
      private $user = "root";
      private $pass = "";
      
      public function connection(){
         try{
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
         }
         catch(PDOException $e){
            echo "Erro de conexão: " . $e->getMessage();
         }
      }
   }

























?>