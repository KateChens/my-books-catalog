<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('books.store') }}">
                    @csrf
                    <label>Author
                        <input type="text" name="author">
                    </label><br>
                    <label>Title
                        <input type="text" name="title">
                    </label><br>
                    <label>Description
                        <input type="text" name="description">
                    </label><br>
                    <label>Publisher
                        <input type="text" name="publisher">
                    </label><br>
                    <label>Publication year
                        <input type="text" name="publication_year">
                    </label><br>
                    <label>Is read?
                        <input type="text" name="is_read">
                    </label><br>
                    <label>Review
                        <input type="text" name="review">
                    </label><br>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
