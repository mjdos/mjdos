<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demandas_entregues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_colaborador')->nullable();
            $table->integer('demanda_id')->unsigned();
            $table->foreign('demanda_id')
                ->references('id')
                ->on('demandas');
            $table->string('resposta');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demandas_entregues');
    }
};
