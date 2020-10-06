<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->string('tipo_do_contrato');
            $table->string('nome_envolvido1');
            $table->string('nome_envolvido2');
            $table->string('data_do_contrato');
            $table->decimal('valor', 5, 2);
            $table->string('nome_do_tabeliao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
