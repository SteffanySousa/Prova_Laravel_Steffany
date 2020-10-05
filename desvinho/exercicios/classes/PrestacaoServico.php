<?php

class PrestacaoServico extends Contrato
{
    final public function registar()
    {
        echo 'O contrato de ' .$this->objetoContrato .' foi registrado';
    }
}