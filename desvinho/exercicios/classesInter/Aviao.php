<?php

class  Avião implements Voador
{
    private $horasDeVoo;

    public function __construct($horasDeVoo)
    {
        $this->horasDeVoo = $horasDeVoo;
    }

    public function getHorasDeVoo() 
    {
        return $this->horasDeVoo;
    }

    public function voar()
    {
        $this->energia +=13;
        echo'Estou voando como um avião';
    }
}
