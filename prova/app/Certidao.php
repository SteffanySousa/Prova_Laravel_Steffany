<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
   protected $fillable = [
    'tipo_de_certidao', 'nome_envolvido1', 'nome_envolvido2', 'data_da_certidao', 'nome_do_tabeliao'
   ];
}


