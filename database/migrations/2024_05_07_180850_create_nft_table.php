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
        Schema::create('nft', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('rarity_id')->unsigned();
            $table->foreign('rarity_id')
            ->references('id')
            ->on('rarity');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')
            ->references('id')
            ->on('users');
            $table->string("nome");
            $table->text("description");
            $table->integer("qtd_mx_mint");
            $table->decimal("value");
            $table->string("imagem");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nft');
    }
};
