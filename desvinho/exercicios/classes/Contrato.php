<?php

abstract class Contrato
{
    protected $numeroResgistro;
    protected $nomePessoa;
    protected $nomeTestemunha;
    protected $objetoContrato;
    protected $dataEmissao;
    protected $dataRegistro;
    protected $nomeTabeliao;
    protected $nomeCartorio;


    public function __construct($numeroResgistro,$nomePessoa, $nomeTestemunha, $objetoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
    {
        $this->numeroResgistro=$numeroResgistro;
        $this->nomePessoa=$nomePessoa;
        $this->nomeTestemunha=$nomeTestemunha;
        $this->objetoContrato=$objetoContrato;
        $this->dataEmissao=$dataEmissao;
        $this->dataRegistro=$dataRegistro;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;

    }

    abstract public function registrar($numeroResgistro,$nomePessoa, $nomeTestemunha, $objetoContrato, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio);

}