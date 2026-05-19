<?php
    // Programação Orientada a Objetos em PHP

    class Pessoa {
        public string $nome;
        public int $idade;
        public string $sexo;
        public string $tipo;

        // construtor
        public function __construct() {}

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTipo(string $tipo){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }
    }

    class Fruta {
        public string $nomeFruta;
        public string $corFruta;

        // construtor correto
        public function __construct() {}

        public function setNomeFruta(string $nomeFruta){
            $this->nomeFruta = $nomeFruta;
        }

        public function getNomeFruta(){
            return $this->nomeFruta;
        }

        public function setCorFruta(string $corFruta){
            $this->corFruta = $corFruta;
        }

        public function getCorFruta(){
            return $this->corFruta;
        }
    }

    // Instanciando objeto
    $fruta = new Fruta();

    $fruta->setNomeFruta("Banana");
    $fruta->setCorFruta("Vermelha");

    echo "Nome da fruta: " . $fruta->getNomeFruta() . "<br>";
    echo "Cor da fruta: " . $fruta->getCorFruta();
?>