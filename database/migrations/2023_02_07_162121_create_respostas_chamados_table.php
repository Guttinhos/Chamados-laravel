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
        Schema::create('respostas_chamados', function (Blueprint $table) {
            $table->id();
            $table->text('resposta');
            $table->unsignedBigInteger('chamados_id');
            $table->timestamps();

            $table
                ->foreign('chamados_id')
                ->on('chamados')
                ->references('id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas_chamados');
    }
};
