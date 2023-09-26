<x-admin-layout>
    <h1>Exam Results (Admin)</h1>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Score</th>
                <th>Total Questions</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result->user->name }}</td>
                    <td>{{ $result->score }}</td>
                    <td>{{ $result->total_questions }}</td>
                    <td>{{ number_format(($result->score / $result->total_questions) * 100, 2) }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>
