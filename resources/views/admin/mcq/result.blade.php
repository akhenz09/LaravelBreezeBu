<x-app-layout>
    <h1>Quiz Result</h1>
    <p>Your score: {{ $score }} / {{ $totalQuestions }}</p>
    <p>Correct answers: {{ $correctAnswers }}</p>
    <p>Incorrect answers: {{ $totalQuestions - $correctAnswers }}</p>
    <a href="{{ route('mcq.index') }}">Back to MCQ Questions</a>

<br>
<br><br><br>
        <h1>MCQ Result</h1>
        <p>Total Questions: {{ $totalQuestions }}</p>
        <p>Correct Answers: {{ $correctAnswers }}</p>
        <p>Score: {{ $score }}</p>


</x-app-layout>
