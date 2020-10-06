<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'tipo_do_contrato', 'nome_envolvido1', 'nome_envolvido2', 'data_do_contrato', 'valor', 'nome_do_tabeliao'
       ];
}
