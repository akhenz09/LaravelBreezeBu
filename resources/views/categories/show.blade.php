<x-admin-layout>
    <h1>Category: {{ $category->name }}</h1>

    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>

    <div class="mt-3">
        <!-- Display category details here -->
    </div>
</x-admin-layout>
