<?php
    class Carro {
        public string $marca;
        public string $modelo;
        public int $ano;
        public string $cor;

        //construtor
        public function __construct(){}
        
        public function setMarca(string $marca){
            $this->marca = $marca;
        }
        
        public function getMarca(){
            return $this->marca;
        }
        public function setModelo(string $modelo){
            $this->modelo = $modelo;
        }
        
        public function getModelo(){
            return $this->modelo;
        }

        public function setAno(int $ano){
            $this->ano = $ano;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setCor(string $cor){
            $this->cor = $cor;
        }

        public function getCor(){
            return $this->cor;
        }
    }




//Intanciando objeto
$carro = new Carro();
$carro->setMarca("Toyota");
$carro->setModelo("Corolla");
$carro->setAno(2020);
$carro->setCor("Prata");

// Exibindo informações do carro
echo "Marca: " . $carro->getMarca() . "<br>";
echo "Modelo: " . $carro->getModelo() . "<br>";
echo "Ano: " . $carro->getAno() . "<br>";

?>