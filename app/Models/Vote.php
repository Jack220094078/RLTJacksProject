<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'vote';
    use HasFactory;
    //
    protected $fillable = [
        'user_id',
        'question_id',
        'answer_id',
        'value'
    ];
        public function question() {
        return $this->belongsTo(Question::class);
        }
        public function user() {
            return $this->belongsTo(User::class);
        }
        public function answer() {
            return $this->belongsTo(Answer::class);
}
        }