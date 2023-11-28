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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('about_us_title');
            $table->string('about_description');
            $table->string('image');
            $table->string('infolabel');
            $table->json('info');
            $table->string('button_text');
            $table->string('number_of_Experience');
            $table->string('Experience_text');
            $table->string('EXPERICNCE_AND_EDUCATION');
            $table->string('EXPERICNCE_AND_EDUCATION _desc');
            $table->string('EXPERICNCE_AND_EDUCATION _header');
            $table->json('EXPERICNCE_json');
            $table->string('SKILLs_title');
            $table->string('SKILLs_header');
            $table->string('Skills_description');
            $table->json('tools');
            $table->json('beanners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
