<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answer';
    use HasFactory;
    
    //
    protected $fillable = [
        'question_id',
        'answer',
        'user_id',
        'upvotes'

    ];
    // Relationship to User 
    public function question() {
        return $this->belongTo(Question::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}