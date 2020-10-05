<?php

class  Pato implements Voador
{
    private $energia;

    public function __construct($energia)
    {
        $this->energia = $energia;
    }

    public function getEnergia() 
    {
        return $this->energia;
    }

    public function voar()
    {
        $this->energia -=5;
        echo'Estou voando como um pato';
    }
}
