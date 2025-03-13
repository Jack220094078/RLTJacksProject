<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function submit(Request $request) {
        $validated = $request->validate([
            'answer'=> 'required |min:10',
        ]);
        $answer = Answer::create([
            'answer' => $request['answer'],
            'question_id' => $request['question'],
            'user_id' => Auth::id(),
            'upVotes'=> 0 ,
        ]);
}

}