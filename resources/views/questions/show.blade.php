<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $question->title }}
            </h2>
            <x-jet-dropdown-link href="{{ route('questions.index') }}">
                <div class="flex items-center font-bold">            
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    {{ __('Back to all Questions') }}
                </div>
            </x-jet-dropdown-link>
        </div>
    </x-slot>
       
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="flex border-b border-gray-200 bg-white mb-8 sm:rounded-lg shadow-md">
                <div class="p-6 w-full">
                    <h1 class="text-xl sm:text-2xl font-semibold text-gray-700"><a href="{{ $question->url }}">{{ $question->title }}</a></h1>
                    <h3 class="text-md sm:text-base font-normal text-gray-500">Asked by <span class="font-semibold text-md sm:text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">{{ $question->user->name }}</a></span> <small class="text-gray-400 text-sm">{{ $question->date }}</small></h3>
                    <hr class="my-1">
                    <p class="text-sm font-normal text-gray-500">{{ $question->body }}</p>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
