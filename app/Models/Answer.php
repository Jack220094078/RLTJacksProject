<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
    public function vote() {
        return $this->hasMany(Vote::class);
    }
    public function upvote() {
        return $this->vote()->where('value', 1);
    }
    public function downvote() {
        return $this->vote()->where('value', -1);
    }
    public function userVote()
    {
        return $this->hasOne(Vote::class)->where('user_id', Auth::id());
    }


    public function getUserVotedAttribute()
    {
        return optional($this->userVote)->value;
    }
    protected $appends = ['user_voted'];
    protected $with = ['userVote']; // optional: auto-loads it every time
}