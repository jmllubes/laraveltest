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
                        <h1 class="text-2xl font-bold mb-6">Afegir Llibre</h1>
                        <form action="{{ route('llibres.store') }}" method="POST" class="max-w-lg mx-auto p-6 bg-gray-100 dark:bg-gray-900 shadow-md rounded-md">
                            @csrf
                            <div class="mb-4">
                                <label for="titol" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Títol:</label>
                                <input type="text" id="titol" name="titol" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring focus:border-blue-300">
                            </div>
                            <div class="mb-4">
                                <label for="autor" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Autor:</label>
                                <input type="text" id="autor" name="autor" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring focus:border-blue-300">
                            </div>
                            <div class="mb-4">
                                <label for="editorial" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Editorial:</label>
                                <input type="text" id="editorial" name="editorial" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring focus:border-blue-300">
                            </div>
                            <div class="mb-4">
                                <label for="isbn" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">ISBN:</label>
                                <input type="text" id="isbn" name="isbn" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring focus:border-blue-300">
                            </div>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-bold rounded-md border border-blue-700 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>