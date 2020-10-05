<?php

//ASSOCIAÇÃO COM CACHORRO

class Animal
{
    private $tipo;
    private $altura;
    private $sexo;

    
    public function  __construct($tipo, $altura, $sexo)
    {
       $this->tipo = $tipo;
       $this->altura = $altura;
       $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
}

