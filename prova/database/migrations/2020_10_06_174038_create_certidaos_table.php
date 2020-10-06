<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidaos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_de_certidao');
            $table->string('nome_envolvido1');
            $table->string('nome_envolvido2');
            $table->string('data_da_certidao');
            $table->string('nome_do_tabeliao');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certidaos');
    }
}
