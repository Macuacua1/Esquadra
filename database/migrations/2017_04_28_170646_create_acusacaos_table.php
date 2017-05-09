<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcusacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acusacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('denuncia_id')->unsigned();
            $table->foreign('denuncia_id')->references('id')->on('denuncias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('individuo_id')->unsigned();
            $table->foreign('individuo_id')->references('id')->on('individuos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('local');
            $table->string('descricao_local');
            $table->string('nomeacusado');
            $table->text('motivo');
            $table->string('estado');
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
        Schema::dropIfExists('acusacaos');
    }
}
