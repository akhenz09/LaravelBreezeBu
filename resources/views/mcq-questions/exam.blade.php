<x-app-layout>
    <div id="timer">Time remaining: <span id="timer-countdown"></span></div>
    <h1>Take Exam</h1>
    <form action="{{ route('exam-submit') }}" method="POST">
        @csrf
        @foreach ($questions as $question)
            <div class="mb-3">
                <p>{{ $question->question }}</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="A" id="option_a_{{ $question->id }}">
                    <label class="form-check-label" for="option_a_{{ $question->id }}">A) {{ $question->option_a }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="B" id="option_b_{{ $question->id }}">
                    <label class="form-check-label" for="option_b_{{ $question->id }}">B) {{ $question->option_b }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="C" id="option_c_{{ $question->id }}">
                    <label class="form-check-label" for="option_c_{{ $question->id }}">C) {{ $question->option_c }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="D" id="option_d_{{ $question->id }}">
                    <label class="form-check-label" for="option_d_{{ $question->id }}">D) {{ $question->option_d }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="E" id="option_e_{{ $question->id }}">
                    <label class="form-check-label" for="option_e_{{ $question->id }}">E) {{ $question->option_e }}</label>
                </div>
                <hr>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit Exam</button>
    </form>
</x-app-layout>

@push('scripts')
    <script src="{{ asset('/resources/js/exam-timer.js') }}"></script>
@endpush
