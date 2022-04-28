<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuemsomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quemsomos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_social')->nullable();
            $table->string('nome_fantasia')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('telefone')->nullable();
            $table->string('telefone2')->nullable();

            $table->string('email', 30)->nullable();
            $table->string('linkedin', 250)->nullable();
            $table->string('instagram', 250)->nullable();
            $table->string('facebook', 250)->nullable();

            $table->text('visao')->nullable();
            $table->text('missao')->nullable();
            $table->text('valores')->nullable();

            $table->longText('endereco_matriz')->nullable();
            $table->longText('endereco_matriz_link')->nullable();

            $table->longText('quemsomos')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quemsomos');
    }
}
