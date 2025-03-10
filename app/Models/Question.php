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
        'upVotes',
        'questionbody',
    ];
    // Relationship to User 
    public function user() {
        return $this->belongTo(User::class);
    }
}
