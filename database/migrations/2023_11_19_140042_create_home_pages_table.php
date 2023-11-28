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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('toolImage');
            $table->string('toolimg');
            $table->string('image');
            $table->string('cvFile');
            $table->string('counter');
            $table->string('text');
            $table->string('labelText');
            $table->string('header');
            $table->string('samll_description');
            $table->string('paragph');
            $table->string('textbutton');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
