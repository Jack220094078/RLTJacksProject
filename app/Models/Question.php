<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    use HasFactory;
    //
    protected $fillable = [
        'user_id',
        'questiontext',
        'questionbody',
    ];
    // Relationship to User 
    public function user() {
        return $this->belongTo(User::class);
    }
    public function answer() {
        return $this->hasMany(Answer::class);
    }
    public function vote() {
        return $this->hasMany(Vote::class);
    }
    public function upvote() {
        return $this->vote()->where('value', 1);
    }
    public function downvote() {
        return $this->vote()->where('value', -1);
    }
}