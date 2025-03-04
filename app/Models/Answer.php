<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'question_id',
        'wrong_answer1',
        'correct_answer',
        'wrong_answer2',

    ];
    // Relationship to User 
    public function question() {
        return $this->belongTo(Question::class);
    }
}
