<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($books as $book)
                    <div class="p-6 border-b border-gray-200">
                        <p><strong>Author:</strong> {{ $book->author }}</p>
                        <p><strong>Title:</strong> {{ $book->title }}</p>
                        <p><strong>Description:</strong> {{ $book->description }}</p>
                        <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
                        <p><strong>Publication year:</strong> {{ $book->publication_year }}</p>
                        <p><strong>Is read?</strong> {{ $book->is_read ? 'Yes' : 'No' }}</p>
                        <p><strong>Review:</strong> {{ $book->review }}</p>
                    
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: rgb(219, 17, 17); color: white; padding: 3px; width: 25px;">
                                Х
                            </button>
                        </form>
                        <a href="{{ route('books.show', $book->id) }}" style="background-color: rgb(5, 64, 141); color: white; padding: 3px;">
                            Open
                        </a>
                        <a href="{{ route('books.edit', $book->id) }}" style="background-color: rgb(45, 179, 45); color: white; padding: 3px;">
                            Edit
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

