<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\UserProgress;
use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    public function index()
{
    $flashcards = Flashcard::all();
    return view('admin.flashcards.index', compact('flashcards'));
}

public function create()
{
    return view('admin.flashcards.create');
}

public function store(Request $request)
{
    // Validation logic
    $data = $request->except('_token'); // Exclude _token field

    Flashcard::create($data);

    return redirect()->route('admin.flashcards.create'); // Correct route name
}


public function show($id)
{
    $flashcard = Flashcard::findOrFail($id);
    $flashcards = Flashcard::all();
    return view('admin.flashcards.show', compact('flashcard', 'flashcards'));
}
// Implement similar methods for editing and deleting

public function updateProgress(Request $request)
    {
        $userId = $request->input('userId');
        $flashcardId = $request->input('flashcardId');
        $status = $request->input('status');

        // Update the user's progress in the database
        UserProgress::updateOrCreate(
            ['user_id' => $userId, 'flashcard_id' => $flashcardId],
            ['status' => $status]
        );

        return response()->json(['message' => 'Progress updated successfully']);
    }

}
