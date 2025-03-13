<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index() {
        $questions = Question::withCount("answer")->paginate(8);
        return view('questions',compact('questions'));
    }
    public function create() {
        return view('create_question');
    }
    public function submit(Request $request) {
        $validated = $request->validate([
            'questionbody'=> '',
            'questiontext'=> 'required |min:10',
        ]);
        $question = Question::create([
            'questionbody' => $request['questionbody'],
            'user_id' => Auth::id(),
            'questiontext'=> $request['questiontext'],
            'upVotes'=> 0 ,
        ]);
        return redirect()->route('Q&A')->with('success','question_created');
    }
    public function single_question($id) {
        $question = Question::find($id);
        return view('question',compact('question'));
    }
}