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
        Schema::table('languages', function (Blueprint $table) {

            $table->string('og_title', 50);
            $table->string('og_type', 10);
            $table->string('og_image', 50);
            $table->string('og_description', 255);






        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
        //
    }
};
