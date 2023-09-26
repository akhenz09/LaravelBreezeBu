<x-app-layout>

    <header>
        <div class="overlay">
            <div class="subject-chooser">
                <ul>
                    @foreach ($flashcards as $flashcard)
                        <li>
                            <b><a href="#" class="flashcard-link categorycard" data-question="{{ $flashcard->question }}" data-answer="{{ $flashcard->answer }}">
                                {{ $flashcard->id }}
                            </a></b>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>


    <div class="gridcontainer">
        <div class="subject-content">
            <div class="right-align">
                <a class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" id="navButton" href="#">Next</a>
            </div>
            <center>
            <div class="container">
                <div class="card" id="flashcard">
                    <div class="card-inner" id="cardInner">
                        <div class="card-front">
                            <p id="flashcardQuestion">Select a flashcard question</p>
                        </div>
                        <div class="card-back">
                            <p id="flashcardAnswer">Flashcard answer will appear here</p>
                        </div>
                    </div>
                </div>
            </div>
        </center>
            <div class="btncontainer mt-4">
                <button id="correctButton" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Correct</button>
                <button id="incorrectButton" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Incorrect</button>
            </div>
        </div>
    </div>

    <script>
        const card = document.querySelector('.card');
        const cardInner = document.querySelector('.card-inner');
        const flashcardLinks = document.querySelectorAll('.flashcard-link');
        const flashcardQuestion = document.getElementById('flashcardQuestion');
        const flashcardAnswer = document.getElementById('flashcardAnswer');
        const correctButton = document.getElementById('correctButton');
        const incorrectButton = document.getElementById('incorrectButton');
        const navButton = document.getElementById('navButton');
        const firstFlashcard = document.querySelector('.flashcard-link');
        const initialIndex = parseInt(firstFlashcard.textContent) - 1; // IDs are 1-based
        let currentIndex = initialIndex;

        showFlashcard(currentIndex); // Show initial flashcard
        updateNavButton(); // Update button text based on current index

        function showFlashcard(index) {
            const flashcard = flashcardLinks[index];
            if (flashcard) {
                const question = flashcard.getAttribute('data-question');
                const answer = flashcard.getAttribute('data-answer');
                flashcardQuestion.textContent = question;
                flashcardAnswer.textContent = answer;
            }
        }

        function updateNavButton() {
            if (currentIndex === flashcardLinks.length - 1) {
                navButton.textContent = 'Back';
            } else {
                navButton.textContent = 'Next';
            }
        }

        card.addEventListener('click', () => {
            cardInner.classList.toggle('card-flipped');
        });

        flashcardLinks.forEach((link, index) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const question = link.getAttribute('data-question');
                const answer = link.getAttribute('data-answer');
                flashcardQuestion.textContent = question;
                flashcardAnswer.textContent = answer;

                currentIndex = index;
                updateNavButton();
                cardInner.classList.remove('card-flipped');
            });
        });

        correctButton.addEventListener('click', () => {
            const currentFlashcard = flashcardLinks[currentIndex];
            currentFlashcard.classList.add('correct');
            currentFlashcard.classList.remove('incorrect');
            currentIndex = (currentIndex + 1) % flashcardLinks.length;
            showFlashcard(currentIndex);
            updateNavButton();
            cardInner.classList.remove('card-flipped');
        });

        incorrectButton.addEventListener('click', () => {
            const currentFlashcard = flashcardLinks[currentIndex];
            currentFlashcard.classList.add('incorrect');
            currentFlashcard.classList.remove('correct');
            currentIndex = (currentIndex + 1) % flashcardLinks.length;
            showFlashcard(currentIndex);
            updateNavButton();
            cardInner.classList.remove('card-flipped');
        });

        navButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % flashcardLinks.length;
            showFlashcard(currentIndex);
            updateNavButton();
            cardInner.classList.remove('card-flipped');
        });
    </script>

</x-app-layout>
