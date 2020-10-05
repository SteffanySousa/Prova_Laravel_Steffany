<?php

//ASSOCIAÇÃO COM ANIMAL

class Cachorro
{
    private $raca;
    public $idade;
    public $espectativaVida;
    public $peso;
    public $cor;
    private $animal;


    public function __construct($raca, $idade, $espectativaVida, $peso, $cor)
        {
        $this->raca= $raca;
        $this->idade= $idade;
        $this->aumentarEspectativaVida= $espectativaVida;
        $this->peso= $peso;
        $this->cor= $cor;

    }
  
   /* public function aumentarEspectativaVida($quantidade)
    {
        $this->espectativaVida +=($quantidade);
    }

    public function diminuirPeso($valor)
    {

        $this->peso -=($valor);
    }*/


    public function getRaca()
    {
        return $this->raca;
    }

    public function setAnimal(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal()
    {
        return $this->animal;
    }



    //public function AlterarRaca($valor)
    //{
   //     $this->raca +=('$valor');
   // }

}
