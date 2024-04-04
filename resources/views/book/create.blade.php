<x-app-layout>
    <form class="max-w-sm mx-auto bg-white p-10 rounded-md" method="post" action="{{ route('books.store') }}">
        @csrf
        <input type="hidden" name="author_id" id="author_id" value="{{ Auth::user()->id }}" />
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium">Title</label>
            <input type="text" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="title" placeholder="Anabelle" required />
        </div>
        <div class="mb-5">
            <label for="genre" class="block mb-2 text-sm font-medium">Genre</label>
            <input type="text" id="genre"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="genre" placeholder="Horror" required />
        </div>
        <div class="mb-5">
            <label for="release_date" class="block mb-2 text-sm font-medium">Release Date</label>
            <input type="date" id="release_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="release_date" placeholder="Horror" required />
        </div>
        <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium">Price</label>
            <input type="number" id="price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="price" placeholder="13.5$" required />
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium">Description</label>
            <input type="text" id="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="description" placeholder="A scary movie" required />
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit
        </button>
    </form>

</x-app-layout>
