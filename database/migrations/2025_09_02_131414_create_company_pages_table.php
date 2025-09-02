<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('whatsapp');
            $table->string('social')->nullable();
            $table->string('profile')->nullable(); // profile image path
            $table->json('images')->nullable();    // multiple images stored as JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_pages');
    }
};
