<x-app-layout>
    <h1>MCQ Question</h1>
    <p><strong>Question:</strong> {{ $question->question }}</p>
    <p><strong>Option A:</strong> {{ $question->option_a }}</p>
    <!-- Repeat the above for options B, C, D, and E -->
    <p><strong>Correct Option:</strong> {{ $question->correct_option }}</p>
    <a href="{{ route('mcq-questions.edit', $question->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('mcq-questions.destroy', $question->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

</x-app-layout>
