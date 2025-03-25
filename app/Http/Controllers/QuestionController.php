<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index($sort = null) {
        switch($sort)  {
            case 'alphabetical':
                $questions = Question::withCount("answer")->withSum("vote as total_votes", 'value')->orderBy('questiontext')->paginate(8);
            break;
            case 'latest':
                $questions = Question::withCount("answer")->withSum("vote as total_votes", 'value')->orderBy('created_at')->paginate(8);
            break;            
            case 'upvotes':
                $questions = Question::withCount("answer")->withSum("vote as total_votes", 'value')->orderByDesc('total_votes')->paginate(8);
            break;
            default:
                $questions = Question::withCount("answer")->withSum("vote as total_votes", 'value')->paginate(8);
        }
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
        ]);
        return redirect()->route('Q&A')->with('success','question_created');
    }
    public function single_question($id) {
        $question = Question::with(['answer.vote'])->find($id);
        return view('question',compact('question'));
        }
    }

