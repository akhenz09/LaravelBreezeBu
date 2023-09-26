<x-admin-layout>
    <h1>MCQ Questions</h1>
    <a href="{{ route('mcq-questions.create') }}" class="btn btn-primary mb-3">Add Question</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question }}</td>
                    <td>
                        <a href="{{ route('mcq-questions.show', $question->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('mcq-questions.edit', $question->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mcq-questions.destroy', $question->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>
