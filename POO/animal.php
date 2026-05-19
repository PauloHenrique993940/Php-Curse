<?php
    class Cachorro{
        public string $nome;
        public string $raca;
        public int $idade;

        public function __contruct(string $nome, string $raca, int $idade){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
        }

        //metodos para cachorro latir
        public function latir(){
            return "Au Au!";
        }
    }


echo "Criando um Cachorro... \n";
$cachorro1 = new Cachorro("Rex", "labrador", 5);
echo "O cachhorro se chama: " . $cachorro1->nome .  "\n";
echo "A raça do cachorro é: " . $cachorro1->raca . "\n";
echo "A idade  do cachorro é: " . $cachorro1->idade . " anos \n";
echo "O cachorro está: " . $cachorro1->latir() .  "\n";







?>