<x-app-layout>
            <div class="wrapper wrapper--top-nav">
                <div class="wrapper-box">

                    <div class="content">
                        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                            <h2 class="text-2xl font-bold mr-auto">
                                Multiple Choice Questions
                            </h2>
                        </div>
                        <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">
                            <div class="intro-y col-span-12 lg:col-span-8 xxl:col-span-8">
                                <div class="chat__box box mt-2">
                                    <div class="h-full flex items-center">
                                        <div class="mx-auto text-center">
                                            <div class="w-24 h-24 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                                {{--<span>{{ Auth::user()->name }}</span>--}}
                                            </div>
                                            <div class="mt-3">
                                                <form method="POST" action="{{ route('mcq.calculateScore') }}">
                                                    @csrf
                                                    <div class="container">
                                                        <p><strong>{{ $question->question }}</strong></p>

                                                    <input type="radio" name="answers[{{ $question->id }}]" value="option_a" id="option_a">
                                                    <label for="option_a">A: {{ $question->option_a }}</label><br>

                                                    <input type="radio" name="answers[{{ $question->id }}]" value="option_b" id="option_b">
                                                    <label for="option_b">B: {{ $question->option_b }}</label><br>

                                                    <input type="radio" name="answers[{{ $question->id }}]" value="option_c" id="option_c">
                                                    <label for="option_c">C: {{ $question->option_c }}</label><br>

                                                    <input type="radio" name="answers[{{ $question->id }}]" value="option_d" id="option_d">
                                                    <label for="option_d">D: {{ $question->option_d }}</label><br>
                                                        <div id="result" class="result"></div>

                                                    @if ($nextQuestion)
                                                        <a href="{{ route('mcq.show', ['id' => $nextQuestion->id]) }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Next</a>
                                                        @endif

                                                    @if ($isLastQuestion)
                                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Submit Answer</button>
                                                        @endif

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">

        <div class="intro-y col-span-12 lg:col-span-4 xxl:col-span-4">
            <div class="chat__user-list overflow-y-auto scrollbar pr-1">
                @forelse ($questions as $question)
                <li><a href="{{ route('mcq.show', $question->id) }}">{{ $question->question }}</a> 100%</li>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center"> <strong>{{ $question->name }}</strong> </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-primary show flex items-center mt-2 dark:text-white" role="alert">
                        No Subjects Available.
                    </div>
                    @endforelse
            </div>
        </div>
        </div>
</div>
</x-navigation-layout>
