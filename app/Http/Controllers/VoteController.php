<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function addVote(Request $request){
         return dd($request);
        $type = $request['value'];
        if($type === "question"){
            $vote = Vote::create([
                'question_id' => $request['question'],
                'value' => $request['value'],
                'user_id' => Auth::id(),
            ]);   
        }
        else
        {
            $vote = Vote::create([
                'answer_id' => $request['answer'],
                'value' => $request['value'],
                'user_id' => Auth::id(),
            ]);}
}
}