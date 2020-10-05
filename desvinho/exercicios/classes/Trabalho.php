<?php

class Trabalho extends Contrato
{
    final public function registar()
    {
        echo 'O contrato de ' .$this->objetoContrato .' foi registrado';
    }
}