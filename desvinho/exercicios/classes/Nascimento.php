<?php

class Nascimento extends Certidao
{
    protected $dataNascimento;


    public function __construct()
    {
        parent::__construct ($numeroRegistroCertidao, $nomePessoa,$nomeDeclarante, $tipoCertidao,$dataEmissao, $nomeTabeliao, $nomeCartorio, $dataNascimento);
        $this->dataNascimento=$dataNascimento;  
    }

    final public function registar()
    {
        echo 'A certidão de ' .$this->tipoCertidaoo .' foi registrada';
    }
    
}


