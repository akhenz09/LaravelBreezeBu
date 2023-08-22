<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flashcard extends Model
{
    use HasFactory;

protected $fillable = ['question', 'answer'];

    public function up()
{
    Schema::create('flashcards', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->text('answer');
        $table->timestamps();
    });

}

}
