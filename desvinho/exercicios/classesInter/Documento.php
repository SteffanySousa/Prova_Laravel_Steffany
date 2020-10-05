<?php

class Documento implements Imprimivel
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
        echo'Sou um documento do Word ' .$this->nome . ' '.$this->tipo . '<br>';
    }
}