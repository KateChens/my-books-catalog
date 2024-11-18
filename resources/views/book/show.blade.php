<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>Author: {{ $book->author }}</p>
                <p>Title: {{ $book->title }}</p>
                <p>Description: {{ $book->description }}</p>
                <p>Publisher: {{ $book->publisher }}</p>
                <p>Publication year: {{ $book->publication_year }}</p>
                <p>Is read? {{ $book->is_read }}</p>
                <p>Review: {{ $book->review }}</p>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: red; color: white; padding: 3px; width: 25px;">
                        Х
                    </button>
                </form>
                <a href="{{ route('books.edit', $book->id) }}" style="background-color: rgb(45, 179, 45); color: white; padding: 3px;">
                    Edit
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
