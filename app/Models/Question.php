<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'user_id',
        'questiontext',
    ];
    // Relationship to User 
    public function user() {
        return $this->belongTo(User::class);
    }
}
