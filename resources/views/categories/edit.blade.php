<x-admin-layout>
    <h1>Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</x-admin-layout>
