<?php
class Professor {
    public string $nome;
    public string $disciplina;
    public int $idade;
    public string $escola;
    public string $turno;

    // construtor
    public function __construct(
        string $nome,
        string $disciplina,
        int $idade,
        string $escola,
        string $turno
    ) {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->idade = $idade;
        $this->escola = $escola;
        $this->turno = $turno;
    }

    // método para o professor ensinar
    public function ensinar() {
        return "O professor está ensinando a matéria de: " . $this->disciplina;
    }

    public function apresentar() {
        return "Olá, meu nome é " . $this->nome .
            ", tenho " . $this->idade .
            " anos e sou professor de " . $this->disciplina .
            " na escola " . $this->escola .
            ", no turno da " . $this->turno . ".";
    }

    public function mudarEscola(string $novaEscola) {
        $this->escola = $novaEscola;
        return "O professor " . $this->nome .
            " mudou para a escola: " . $this->escola;
    }
}

// criando objeto
$professor1 = new Professor(
    "Paulo",
    "Matemática",
    40,
    "Escola Estadual Filomena",
    "Manhã"
);

echo $professor1->apresentar() . "\n";
echo $professor1->ensinar() . "\n";
echo $professor1->mudarEscola("Escola Estadual João") . "\n";
?>