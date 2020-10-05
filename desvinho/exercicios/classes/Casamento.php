<?php

class Casamento extends Certidao
{
    protected $dataUniao;


    public function __construct()
    {
        parent::__construct ($numeroRegistroCertidao, $nomePessoa,$nomeDeclarante, $tipoCertidao,$dataEmissao, $nomeTabeliao, $nomeCartorio, $dataUniao);
        $this->dataNascimento=$dataUniao;  
    }

    final public function registar()
    {
        echo 'A certidão de ' .$this->tipoCertidaoo .' foi registrada';
    }

}
