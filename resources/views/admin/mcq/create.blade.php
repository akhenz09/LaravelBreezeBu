<x-admin-layout>
<h1>Create MCQ Question</h1>
<form method="post" action="{{ route('admin.mcq.store') }}">
    @csrf
    <label>Question:</label>
    <input type="text" name="question" required>

    <label>A:</label>
    <input type="text" name="option_a" required>

    <label>B:</label>
    <input type="text" name="option_b" required>

    <label>C:</label>
    <input type="text" name="option_c" required>

    <label>D:</label>
    <input type="text" name="option_d" required>

    <label>Correct Option:</label>
    <select name="correct_option" required>
        <option value="option_a">A:</option>
        <option value="option_b">B:</option>
        <option value="option_c">C:</option>
        <option value="option_d">D:</option>
    </select>

    <button type="submit">Submit</button>
</form>

</x-admin-layout>
