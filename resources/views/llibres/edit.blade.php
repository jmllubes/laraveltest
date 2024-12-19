<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Llibres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto">
                        <h1 class="text-2xl font-bold mb-6">Edit Llibre</h1>
                        <form action="{{ route('llibres.update', $llibre->Isbn) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Title</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300" id="title" name="title" value="{{ $llibre->titol }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="author" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Author</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300" id="author" name="author" value="{{ $llibre->autor }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Description</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300" id="description" name="description" rows="3" required>{{ $llibre->editorial }}</textarea>
                            </div>

                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-bold rounded-md border border-blue-700 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>