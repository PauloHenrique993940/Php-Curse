<?php
class Objeto{
        public string $nomeObjeto;
        public string $corObjeto;
        public string $materialObjeto;

        public function __construct(string $nomeObjeto, string $corObjeto, string $materialObjeto){
            $this->nomeObjeto = $nomeObjeto;
            $this->corObjeto = $corObjeto;
            $this->materialObjeto = $materialObjeto;
        }
        //metodo para descrever o objeto
        public function descreverObjeto(){
            return "O objeto é um(a) " . $this->nomeObjeto .
                ", de cor " . $this->corObjeto .
                " e feito de " . $this->materialObjeto . ".";
        }
}

//criando o objeto
$objeto1 = new Objeto("Cadeira", "Vermelha", "Plastico");
echo $objeto1->descreverObjeto();




















?>