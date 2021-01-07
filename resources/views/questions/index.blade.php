<x-app-layout>
    <x-slot  name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Questions') }}
            </h2>
            <x-jet-dropdown-link href="{{ route('questions.create') }}">
                {{ __('Ask Question') }}
            </x-jet-dropdown-link>
        </div>
    </x-slot>
       
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            @foreach($questions as $question)

                <div class="flex border-b border-gray-200 bg-white mb-8 py-6 sm:rounded-lg shadow-md">
                    <div class="px-6 text-center my-auto text-gray-800">
                        <div class="px-3 py-1 mb-1">
                            <strong class="text-lg">{{ $question->votes}}</strong> 
                            <p class="text-sm text-gray-500">{{ $question->votesString }}</p> 
                        </div>
                        <div class="px-3 py-1 {{ $question->status }} rounded-md  mb-1">
                            <strong class="text-lg">{{ $question->answers}}</strong> 
                            <p class="text-sm">{{ $question->answersString }}</p>
                        </div>
                        <div class="px-3 py-2 text-sm text-gray-500">
                            <p>{{ $question->views}} {{ $question->viewsString }}</p>
                        </div>
                    </div>
                    <div class="pr-6">
                        <h1 class="text-xl sm:text-2xl font-semibold text-gray-700"><a href="{{ $question->url }}">{{ $question->title }}</a></h1>
                        <h3 class="text-md sm:text-base font-normal text-gray-500">Asked by <span class="font-semibold text-md sm:text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">{{ $question->user->name }}</a></span> <small class="text-gray-400 text-sm">{{ $question->date }}</small></h3>
                        <hr class="my-1">
                        <p class="text-sm font-normal text-gray-500">{{ $question->body_limit }}</p>
                    </div>
                </div>

            @endforeach

            {{ $questions->links() }}
            
        </div>
    </div>
</x-app-layout>
