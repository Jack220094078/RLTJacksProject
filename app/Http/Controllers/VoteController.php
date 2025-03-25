<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function addVote(Request $request){
        if($request['question']){
            $vote = Vote::updateOrCreate([
                'question_id' => $request['question'],
                'user_id' => Auth::id()],[
                'value' => $request['vote'],
            ]);   
        }
        else
        {
            $vote = Vote::updateOrCreate([
                'answer_id' => $request['answer'],
                'user_id' => Auth::id()],[
                'value' => $request['vote'],
            ]);}
}
}