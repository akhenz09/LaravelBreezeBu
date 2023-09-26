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
         Schema::create('mcq_questions', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('option_a')->nullable();
        $table->string('option_b')->nullable();
        $table->string('option_c')->nullable();
        $table->string('option_d')->nullable();
        $table->string('option_e')->nullable();
        $table->string('correct_option');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcq_questions');
    }
};
