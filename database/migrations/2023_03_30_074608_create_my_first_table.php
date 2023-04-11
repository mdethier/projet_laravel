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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 180);
            $table->string('meta_description', 255);
            $table->string('meta_keywords',255);
            $table->string('iso_code', 2);
            $table->boolean('is_active');
            $table->string('local_code', 5);
            $table->string('www_link_title', 100);
            $table->string('www_link_text', 20);
            $table->string('language_name', 20);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
