<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function index($sort = null) {
        $questions = $this->questionGetter($sort);
        return view('questions',compact('questions'));
    }

    public function teacherView($sort = null) {
        $questions = $this->questionGetter($sort);
        return view('teacher',compact('questions'));
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
    public function single_question($id)
    {
        $question = Question::with([
            'answer' => function ($query) {
                $query->with('userVote');
            }
        ])->withCount(['vote as user_voted' => function($query){$query->where('user_id',Auth::id())->select('value');}])->withSum("vote as total_votes", 'value')->find($id);
   
    
        return view('question', compact('question'));
    }
    

    public function teacherQuestion($id){
        $question = Question::with(['answer.vote'])->withSum("vote as total_votes", 'value')->find($id);
    
        return view('teacherquestion',compact('question'));
    }
        private function questionGetter($sort = null){
            $questions = Question::withCount("answer")->withCount(['vote as user_voted' => function($query){$query->where('user_id',Auth::id())->select('value');}])->withSum("vote as total_votes", 'value');
           
            switch($sort)  {
                case 'alphabetical':
                 $questions->orderBy('questiontext');
                break;
                case 'latest':
                    $questions->orderBy('created_at');
                break;
                case 'upvotes':
                    $questions->orderByDesc('total_votes');
                break;
    
            }
            
           $questions = $questions->paginate(8);
           return $questions;
        }
    }

