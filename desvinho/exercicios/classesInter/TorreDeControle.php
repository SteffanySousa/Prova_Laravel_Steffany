<?php

class TorreDeControle implements Voador
{
    private $voadores;
    

    public function voemTodos()
    {
        foreach ($this->voadores as $voador) {
            $voador->voar();
        }
    }

    public function adicionarVoador(Voador $umvoador)
    {
        $this->voadores[] =$umvoador;
    }
}
