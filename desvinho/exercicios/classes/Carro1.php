<?php

class Carro1 extends Veiculo
{
    protected $qtdPortas;

    public function __construct ($modelo, $ano, $cor, $adicional, $qtdPortas)
    {
        parent::__construct ($modelo, $ano, $cor, $adicional);
        $this->qtdPortas = $qtdPortas;
    }

    final public function acelerar()
    {
        echo 'O ' .$this->modelo .' está acelerando';
    }
}
