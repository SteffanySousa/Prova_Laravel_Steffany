<?php


class Carro
{
    private $modelo;
    public $ano;
    public $qtdPortas;
    private $adicional;
    private $cor;

    public function __construct ($modelo, $ano, $qtdPortas, $adicional, $cor)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->qtdPortas = $qtdPortas;
        $this->adicional = $adicional;
        $this->cor = $cor;
    }



    public function acelerar()
    {
        echo 'O carro agora está acelerando';
    }

    public function freiar()
    {
        echo 'O carro agora está freiando';
    }

    public function AumentarAno($valor)
    
    {
        $this->ano +=($valor);
    }

    
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }


    public function setAdicional($adicional)
    {
        $this->adicional = $adicional;
    }

    public function getAdicional()
    {
        return $this->adicional;
    }


    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }

}