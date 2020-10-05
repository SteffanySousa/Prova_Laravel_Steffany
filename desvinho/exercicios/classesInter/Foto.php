<?php

class Foto implements Imprimivel
{
    private $nome;
    private $tipo;


    public function __construct($nome,$tipo)
    {
        $this->nome= $nome;
        $this->tipo= $tipo;
    }


    public function imprimir()
    {
        echo'Sou uma selfie ' .$this->nome .' '. $this->tipo . '<br>';
    }
}
