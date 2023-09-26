// public/js/exam-timer.js

var examDuration = 5; // Set the duration of the exam in seconds

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var interval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            clearInterval(interval); // Clear the interval to stop the timer

            // Get the question ID from the data attribute
            var questionId = document.querySelector('form').getAttribute('data-question-id');

            // Submit the form
            document.querySelector('form').submit();

            // Redirect to the desired view after submitting the form
            window.location.href = "{{ route('mcq-questions.show', ['id' => '']) }}" + questionId;
        }
    }, 1000);           
}


window.onload = function () {
    var display = document.querySelector('#timer-countdown');
    startTimer(examDuration, display);
};
