<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\MCQQuestion;
use Illuminate\Http\Request;

class MCQQuestionController extends Controller
{
    public function index()
    {
        $questions = MCQQuestion::all();
        return view('admin.mcq.index', compact('questions'));
    }

    public function create()
    {
        return view('admin.mcq.create');
    }

    public function store(Request $request)
    {
        MCQQuestion::create($request->all());
        return redirect()->route('admin.mcq.index');
    }

    public function show($id)
    {
        $questions = MCQQuestion::all();
        $question = MCQQuestion::findOrFail($id);
        $nextQuestion = MCQQuestion::where('id', '>', $id)->orderBy('id')->first();
        $isLastQuestion = !MCQQuestion::where('id', '>', $id)->exists();
        return view('mcq.show', compact('question', 'nextQuestion', 'isLastQuestion'));
    }

    public function calculateScore(Request $request)
{
    $userAnswers = $request->input('answers', []);

    $questionIds = array_keys($userAnswers);
    $questions = MCQQuestion::whereIn('id', $questionIds)->get();

    $totalQuestions = count($questions);
    $correctAnswers = 0;

    foreach ($questions as $question) {
        if ($userAnswers[$question->id] === $question->correct_option) {
            $correctAnswers++;
        }
    }

    $score = $correctAnswers;

    return view('mcq.result', compact('score', 'totalQuestions', 'correctAnswers'));
}

public function overallScore()
{
    $questions = MCQQuestion::all();
    $totalQuestions = count($questions);
    $correctAnswers = 0;

    // Retrieve user answers from session
    $userAnswers = session('user_answers', []);

    foreach ($questions as $question) {
        // Fetch user's answer for the current question
        $userAnswer = isset($userAnswers[$question->id]) ? $userAnswers[$question->id] : null;

        if ($userAnswer === $question->correct_option) {
            $correctAnswers++;
        }
    }

    $score = $correctAnswers;

    return view('mcq.overall-score', compact('score', 'totalQuestions', 'correctAnswers'));
}


}
