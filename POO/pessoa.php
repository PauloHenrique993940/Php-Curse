<?php
class Pessoa {
    public string $nome;
    public int $idade;
    public string $sexo;
    public string $endereco;

    // construtor
    public function __construct(){}

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade(int $idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setSexo(string $sexo){
        $this->sexo = $sexo;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setEndereco(string $endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }
}

// Instanciando objeto (fora da classe)
$pessoa = new Pessoa();

$pessoa->setNome("Paulo Henrique");
$pessoa->setIdade(35);
$pessoa->setSexo("Masculino");
$pessoa->setEndereco("Rua das Flores, 123");

echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Idade: " . $pessoa->getIdade() . "<br>";
echo "Sexo: " . $pessoa->getSexo() . "<br>";
echo "Endereço: " . $pessoa->getEndereco() . "<br>";
?>