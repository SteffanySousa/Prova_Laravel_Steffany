<?php

class Obito extends Certidao
{
    protected $dataFalecimento;


    public function __construct()
    {
        parent::__construct ($numeroRegistroCertidao, $nomePessoa,$nomeDeclarante, $tipoCertidao,$dataEmissao, $nomeTabeliao, $nomeCartorio, $dataUniao);
        $this->dataNascimento=$dataFalecimento;  
    }

    final public function registar()
    {
        echo 'A certidão de ' .$this->tipoCertidaoo .' foi registrada';
    }

}
