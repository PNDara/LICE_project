<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="bg-blue-500 px-8 py-2 text-white" href="{{ route('books.create') }}">Create Book</a>

            @foreach ($books as $book)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-5">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h2 class="text-2xl font-semibold text-gray-800 leading-tight">
                                {{ $book->title }}
                            </h2>
                            <a class="bg-blue-500 px-8 py-2 text-white"
                                href="{{ route('books.edit', $book->id) }}">Edit</a>


                            <form class="inline" action="{{ route('books.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 px-8 py-2 text-white" type="submit">Delete</button>
                            </form>

                            @php
                                $author = $book->author;
                            @endphp

                            <p class="text-sm text-gray-500">Author: {{ $author->first_name . ' ' .$author->last_name }}</p>
                            <p class="text-sm text-gray-500">Genre: {{ $book->genre }}</p>
                            <p class="text-sm text-gray-500">Release Date: {{ $book->release_date }}</p>
                            <p class="text-sm text-gray-500">Price: {{ $book->price }}</p>
                            <p class="text-sm text-gray-500">Description: {{ $book->description }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
