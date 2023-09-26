<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end p-2">
                    <a href="{{ route('flashcards.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md">Back</a>
                </div>
                <div class="flex justify-center">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 ">
                        <form method="POST" action="{{ route('flashcards.store') }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="question" class="block text-sm font-medium text-gray-700">Question</label>
                                <div class="mt-1">
                                    <textarea type="text" name="question" id="question" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                </div>
                                @error('question') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="sm:col-span-6">
                                <label for="answer" class="block text-sm font-medium text-gray-700">Answer:</label>
                                <div class="mt-1">
                                    <input name="answer" id="answer" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                                @error('answer') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col py-12 w-full">
        <div class="-my-2 mx-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-2">
            <table class="min-w-full divide-y divide-gray-200 p-2">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($flashcards as $flashcard)
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        {{ $flashcard->id }}
                    </div>
                    </td>
                    <td>
                       <div class="flex justify-end">
                           <div class="flex space-x-2">
                            <a href="{{ route('flashcards.edit', $flashcard->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST" action="{{ route('flashcards.destroy', $flashcard->id) }}" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                             </form>                                       </div>
                       </div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</x-admin-layout>
