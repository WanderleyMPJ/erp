<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 50)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('referencia', 100)->nullable();
            $table->string('bairro', 70)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('cidade', 60)->nullable();
            $table->string('cep', 10)->nullable();
            $table->integer('pessoa_id')->unsigned();
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          
        Schema::dropIfExists('pessoa_enderecos');
    }
}
