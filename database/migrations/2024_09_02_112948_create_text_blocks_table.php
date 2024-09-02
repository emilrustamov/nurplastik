<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('text_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Ключ для идентификации блока
            $table->json('content'); // Контент в формате JSON для хранения данных на трех языках
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_blocks');
    }
};
