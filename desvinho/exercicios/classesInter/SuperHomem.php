<?php

class SuperHomem implements Voador
{
    private $experiencia;

    public function __construct($experiencia)
    {
        $this->experiencia = $experiencia;
    }


    public function voar()
    {
        $this->energia +=3;
        echo'Estou voando como um Campeão';
    }
}
