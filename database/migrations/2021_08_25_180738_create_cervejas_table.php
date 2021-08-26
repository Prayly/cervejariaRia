<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCervejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cervejas', function (Blueprint $table) {
            $table->id();
            //cria o banco
            $table->string('nome',100);
            $table->string('nomeImagem',80);//salva o hash do nome da imagem*tempo
            $table->string('descricao',300);
            $table->string('tipo',20);
            $table->float('preco');
            $table->integer('quantidade');

            
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
        Schema::dropIfExists('cervejas');
    }
}
