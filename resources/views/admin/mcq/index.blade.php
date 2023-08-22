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
                                    <div class="font-medium">Hello, <span>{{ Auth::user()->name }}</span>!</div>
                                    <div class="text-gray-600 mt-1 dark:text-white">Please select a Lesson to start Learning.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
</div>

</x-app-layout>
