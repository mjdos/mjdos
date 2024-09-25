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
        Schema::create('dados_esp32', function (Blueprint $table) {
            $table->id();
            $table->string('n_equipamento', 16,2);
            $table->decimal('temperatura');
            $table->decimal('umidade');
            $table->decimal('luz');
            $table->boolean('movimento');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_esp32');
    }
};
