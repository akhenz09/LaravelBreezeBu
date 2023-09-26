    <x-app-layout>
        <div class="grid-container py-12 w-full">
            <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
    <form action="{{ route('mcq-questions.store') }}" method="POST">
        @csrf
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="question">Question:</label>
            <input type="text" name="question" class="form-control" required>
        </div>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="option_a">Option A:</label>
            <input type="text" name="option_a" class="form-control" required>
        </div>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="option_b">Option B:</label>
            <input type="text" name="option_b" class="form-control" required>
        </div>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="option_c">Option C:</label>
            <input type="text" name="option_c" class="form-control" required>
        </div>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="option_d">Option D:</label>
            <input type="text" name="option_d" class="form-control" required>
        </div>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="option_e">Option E:</label>
            <input type="text" name="option_e" class="form-control" required>
        </div>
        </div>
        <div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl sm:px-6 lg:px-8 form-group p-2">
            <label for="correct_option">Correct Option:</label>
            <select name="correct_option" class="form-control" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
        </div class="">
        <button type="submit" class="flex flex-col items-end px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Create Question</button>
        </div>
    </form>
                    </div>
                </div>


<div class="grid-item py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Question</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">A</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">B</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">C</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">D</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Answer</th>
                            <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($questions as $question)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{ $question->id }}
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    {{ $question->question }}
                                </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        {{ $question->option_a }}
                                    </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $question->option_b }}
                                        </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $question->option_c }}
                                            </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    {{ $question->option_d }}
                                                </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $question->option_e }}
                                                    </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            {{ $question->correct_option }}
                                                        </div>
                                                        </td>
                            <td>
                               <div class="flex justify-end">
                                   <div class="flex space-x-2">
                                    <a href="{{ route('mcq-questions.edit', $question->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST" action="{{ route('mcq-questions.destroy', $question->id) }}" onsubmit="return confirm('Are you sure?');">
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
        </div>
    </div>
</div>
</x-admin-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
