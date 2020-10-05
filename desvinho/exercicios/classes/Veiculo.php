<?php

abstract class Veiculo
{
    protected $modelo;
    protected $ano;
    protected $cor;
    protected $adicional;

    public function __construct ($modelo, $ano, $cor, $adicional)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->adicional = $adicional;
    }

    public function getDados()
    {
        return "Modelo: $this->modelo, Ano: $this->ano";
    }
   
    abstract public function acelerar();
   

    public function freiar()
    {
        echo 'O ' .$this->modelo .' está freiando';
    }
}