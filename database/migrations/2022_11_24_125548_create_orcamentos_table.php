<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
                   
            $table->foreignId('cliente_id')->references('id')->on('clientes');
            $table->foreignId('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreignId('produto_id')->references('id')->on('produtos');
            $table->integer('quantidade_orcamento');
            $table->integer('status');
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
        Schema::dropIfExists('orcamentos');
    }
};
