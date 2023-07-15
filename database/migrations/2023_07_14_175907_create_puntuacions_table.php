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
        Schema::create('puntuacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('puntuacion');
            $table->dateTime('fecha_puntuacion');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('autor_id');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puntuacions');
    }
};
