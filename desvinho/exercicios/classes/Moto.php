<?php

class Moto extends Veiculo
{
    final public function acelerar()
    {
        echo 'O ' .$this->modelo .' está acelerando';
    }
    
}