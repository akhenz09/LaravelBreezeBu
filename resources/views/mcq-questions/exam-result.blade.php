<x-app-layout>
    <h1>Exam Result</h1>
    <p>Your Score: {{ $score }} out of {{ count($correctAnswers) }}</p>
    <p>Overall Result: {{ number_format(($score / count($correctAnswers)) * 100, 2) }}%</p>

    <h2>Submitted Answers:</h2>
    <ul>
        @foreach ($submittedAnswers as $questionId => $submittedAnswer)
            <li>Question {{ $questionId }}: Submitted answer - {{ $submittedAnswer }} (Correct: {{ $correctAnswers[$questionId] }})</li>
        @endforeach
    </ul>

    <a href="{{ route('take.exam') }}" class="btn btn-primary">Take Another Exam</a>
</x-app-layout>

