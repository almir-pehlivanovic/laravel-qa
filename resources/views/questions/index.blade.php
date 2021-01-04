<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Questions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @foreach($questions as $question)

                <div class="border-b border-gray-200 bg-white mb-8 p-6 sm:rounded-lg shadow-md">
                    <h1 class="text-2xl font-semibold text-gray-700 my-2"><a href="{{ $question->url }}">{{ $question->title }}</a></h1>
                    <h3 class="text-base font-normal text-gray-500">Asked by <span class="font-semibold text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">{{ $question->user->name }}</a></span> <small class="text-gray-400 text-sm">{{ $question->date }}</small></h3>
                    <hr class="my-1">
                    <p class="font-normal text-gray-500">{{ $question->body_limit }}</p>
                </div>

            @endforeach

            {{ $questions->links() }}
            
        </div>
    </div>
</x-app-layout>
