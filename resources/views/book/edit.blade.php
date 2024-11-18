<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $book->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                        <input type="text" name="publisher" id="publisher" value="{{ old('publisher', $book->publisher) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="publication_year" class="block text-sm font-medium text-gray-700">Publication Year</label>
                        <input type="number" name="publication_year" id="publication_year" value="{{ old('publication_year', $book->publication_year) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="is_read" class="block text-sm font-medium text-gray-700">Is Read?</label>
                        <select name="is_read" id="is_read" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="1" {{ old('is_read', $book->is_read) ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('is_read', $book->is_read) ? '' : 'selected' }}>No</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                        <textarea name="review" id="review" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('review', $book->review) }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
