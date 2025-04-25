<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function addVote(Request $request)
{
    $userId = Auth::id();
    $voteValue = $request['vote'];

    if ($request['question']) {
        $existingVote = Vote::where('question_id', $request['question'])
            ->where('user_id', $userId)
            ->where('value', $voteValue)
            ->first();

        if ($existingVote) {
            $existingVote->delete(); // Remove if same vote exists
        } else {
            Vote::updateOrCreate(
                ['question_id' => $request['question'], 'user_id' => $userId],
                ['value' => $voteValue]
            );
        }
    } 
    else if ($request['answer']) {
        $existingVote = Vote::where('answer_id', $request['answer'])
            ->where('user_id', $userId)
            ->where('value', $voteValue)
            ->first();

        if ($existingVote) {
            $existingVote->delete(); // Remove if same vote exists
        } else {
            Vote::updateOrCreate(
                ['answer_id' => $request['answer'], 'user_id' => $userId],
                ['value' => $voteValue]
            );
        }
    }

    return redirect()->back();
}

}