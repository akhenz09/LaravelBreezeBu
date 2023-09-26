<?php

namespace App\Http\Controllers;

use App\Models\MCQQuestion;
use Illuminate\Http\Request;

class MCQQuestionController extends Controller
{
    public function index()
    {
        $questions = MCQQuestion::all();
        return view('mcq-questions.start', compact('questions'));
    }

    public function indexAdmin()
    {
        $questions = MCQQuestion::all();
        return view('mcq-questions.indexadmin', compact('questions'));
    }

    public function create()
    {
        $questions = MCQQuestion::all();
        return view('mcq-questions.create', compact('questions'));
    }

    public function start()
    {
        $questions = MCQQuestion::all();
        return view('mcq-questions.start', compact('questions'));
    }

    public function store(Request $request)
    {
        // Validate the form data here
        MCQQuestion::create($request->all());
        return redirect()->route('mcq-questions.index');
    }

    public function edit($id)
    {
        $questions = MCQQuestion::all();
        $question = MCQQuestion::findOrFail($id);
        return view('mcq-questions.edit', compact('question', 'questions'));
    }

    public function update(Request $request, $id)
    {
        $question = MCQQuestion::findOrFail($id);
        // Validate the form data here
        $question->update($request->all());
        return redirect()->route('mcq-questions.index');
    }

    public function destroy($id)
    {
        $question = MCQQuestion::findOrFail($id);
        $question->delete();
        return redirect()->route('mcq-questions.index');
    }

    /*public function examSubmit(Request $request)
{
    $submittedAnswers = $request->input('answers');

    // Retrieve the correct answers from the database
    $correctAnswers = MCQQuestion::whereIn('id', array_keys($submittedAnswers))
        ->pluck('correct_option', 'id')
        ->toArray();

    $score = 0;
    foreach ($submittedAnswers as $questionId => $submittedAnswer) {
        if (isset($correctAnswers[$questionId]) && $correctAnswers[$questionId] === $submittedAnswer) {
            $score++;
        }
    }

    return view('mcq-questions.exam-result', compact('score', 'submittedAnswers', 'correctAnswers'));
}*/

public function examSubmit(Request $request)
{
    $submittedAnswers = $request->input('answers');

    // Retrieve the correct answers from the database
    $correctAnswers = MCQQuestion::whereIn('id', array_keys($submittedAnswers))
        ->pluck('correct_option', 'id')
        ->toArray();

    $score = 0;
    foreach ($submittedAnswers as $questionId => $submittedAnswer) {
        if (isset($correctAnswers[$questionId]) && $correctAnswers[$questionId] === $submittedAnswer) {
            $score++;
        }
    }

    return view('mcq-questions.exam-result', compact('score', 'submittedAnswers', 'correctAnswers'));
}


    public function takeExam()
    {
        $questions = MCQQuestion::inRandomOrder()->limit(10)->get(); // Randomly select 10 questions
        return view('mcq-questions.exam', compact('questions'));
    }

    public function show($id)
{
    $question = MCQQuestion::findOrFail($id);
    return view('mcq-questions.show', compact('question'));
}
}
