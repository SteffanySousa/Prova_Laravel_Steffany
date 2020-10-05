<?php

class Contrato implements Imprimivel
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
        echo'Sou um contrato muito legal ' .$this->nome .' '. $this->tipo . '<br>';
    }
    
}