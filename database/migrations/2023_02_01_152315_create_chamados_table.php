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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('assunto', 40);
            $table->string('dominio_relacionado', 255);
            $table->string('tipo_contato', 100);
            $table->string('url_dificuldade', 100);
            $table->string('telefone_contato', 15);
            $table->string('anexo', 255)->nullable();
            $table->string('mensagem', 255);
            $table->string('status',20)->default('aberto');
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
        Schema::dropIfExists('chamados');
    }
};
