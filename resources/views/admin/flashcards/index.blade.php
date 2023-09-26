<x-app-layout>
    <header>
        <div class="overlay">
                <h1>Flashcards</h1>
        </div>
        </header>
    <header>
    <div class="overlay">
        <div class="subject-chooser">
            <ul>
                @foreach ($flashcards as $flashcard)
                        <li><a class="flashcard-link categorycard" href="{{ route('flashcards.show', $flashcard->id) }}">{{ $flashcard->id }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    </header>
</x-app-layout>
