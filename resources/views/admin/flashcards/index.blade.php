<x-app-layout>
    <h1>Flashcards List</h1>
    <ul>
        @foreach ($flashcards as $flashcard)
            <li><a href="{{ route('flashcards.show', $flashcard->id) }}">{{ $flashcard->question }}</a></li>
        @endforeach
    </ul>
</x-app-layout>
