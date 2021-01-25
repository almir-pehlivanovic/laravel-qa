<x-app-layout>
    <x-slot  name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Questions') }}
            </h2>
            <x-jet-dropdown-link href="{{ route('questions.create') }}">
                <div class="font-bold">
                    {{ __('Ask Question') }}
                </div>
            </x-jet-dropdown-link>
        </div>
    </x-slot>
       
    <div class="relative py-16 flex flex-wrap max-w-7xl mx-auto">
        <div class="mx-auto xl:mx-0 max-w-4xl sm:px-6 lg:px-8">
            
            @foreach($questions as $question)

                <div class="flex border-b border-gray-200 bg-white mb-8 py-6 sm:rounded-lg shadow-md">
                    <img src="{{ $question->user->profile_photo_url }}" alt="{{ $question->user->name }}" class="mx-6 rounded-full h-20 w-20 object-cover">
                    <div class="pr-6 w-full">
                        <div class="flex justify-between items-center flex-wrap">
                            <h1 class="text-xl sm:text-2xl font-semibold text-gray-700"><a href="{{ $question->url }}">{{ $question->title_limit }}</a></h1>

                            @if(Auth::user()->can('update-question', $question))

                                <a href="{{ route('questions.edit', $question->slug) }}">
                                    <button type ="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ __('Edit') }}
                                    </button>
                                </a>
                                
                            @endif
                        
                        </div>
                        <h3 class="text-md sm:text-base font-normal text-gray-500">Asked by <span class="font-semibold text-md sm:text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">{{ $question->user->name }}</a></span> <small class="text-gray-400 text-sm">{{ $question->date }}</small></h3>
                        <div class="flex">
                            <div class="flex mr-2 {{ $question->statusAnswers }}">
                                <span class="mr-1">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </span>
                                <p>{{ $question->answers_count}} {{ $question->answersString }}</p>
                            </div>
                            <div class="flex mr-2 {{ $question->statusVotes }}">
                                <span class="mr-1">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                </span>
                                <p>{{ $question->votes}} {{ $question->votesString }}</p>
                            </div>
                            <div class="flex mr-2 {{ $question->statusViews }}">
                                <span class="mr-1">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                                <p>{{ $question->views}} {{ $question->viewsString }}</p>
                            </div>
                        </div>
                        <hr class="my-1">
                        <p class="text-sm font-normal text-gray-500">{{ $question->body_limit }}</p>
                    </div>
                </div>

            @endforeach

            {{ $questions->links() }}
            
        </div>
        <div class="xl:hidden fixed right-0 sm:right-6 lg:right-8 top-40">
            <button class="rounded border bg-white shadow-2xl p-2">
                <svg class="w-6 h-6 "xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
            </button>
        </div>
        <div class="hidden xl:block flex-1 pr-8 pl-0">
            <div class="bg-white p-6 mb-8 sm:rounded-lg shadow-md flex-shrink-0">
                <h1 class="text-xl sm:text-2xl font-semibold text-gray-700">Top users of the Week</h1>
                <hr class="my-3">
                <div class="flex items-center mt-4">
                    <img src="{{ asset('storage/profile-photos/qeUGffZyAEcdj80WZJqQJ5RHVIYVVnxWgv8SShLi.jpg') }}" alt="" class="mr-2 rounded-full h-12 w-12 object-cover">
                    <div class="flex justify-between w-full items-baseline">
                        <div>
                            <p class="font-semibold text-md sm:text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">Almir</a></p>
                            <p class="text-gray-400 text-sm">Since 2021</p>
                        </div>
                        <div class="flex items-center text-indigo-400 text-sm">
                            <span class="mr-1">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </span>
                            <p>217</p>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
                <div class="flex items-center mt-4">
                    <img src="{{ asset('storage/profile-photos/qeUGffZyAEcdj80WZJqQJ5RHVIYVVnxWgv8SShLi.jpg') }}" alt="" class="mr-2 rounded-full h-12 w-12 object-cover">
                    <div class="flex justify-between w-full items-baseline">
                        <div>
                            <p class="font-semibold text-md sm:text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">Almir</a></p>
                            <p class="text-gray-400 text-sm">Since 2021</p>
                        </div>
                        <div class="flex items-center text-indigo-400 text-sm">
                            <span class="mr-1">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </span>
                            <p>217</p>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
                <div class="flex items-center mt-4">
                    <img src="{{ asset('storage/profile-photos/qeUGffZyAEcdj80WZJqQJ5RHVIYVVnxWgv8SShLi.jpg') }}" alt="" class="mr-2 rounded-full h-12 w-12 object-cover">
                    <div class="flex justify-between w-full items-baseline">
                        <div>
                            <p class="font-semibold text-md sm:text-lg hover:text-gray-800 transition ease-in duration-150 "><a href="#">Almir</a></p>
                            <p class="text-gray-400 text-sm">Since 2021</p>
                        </div>
                        <div class="flex items-center text-indigo-400 text-sm">
                            <span class="mr-1">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </span>
                            <p>217</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 mb-8 sm:rounded-lg shadow-md flex-shrink-0">
                <h1 class="text-xl sm:text-2xl font-semibold text-gray-700">Hot Questions</h1>
                <hr class="my-3">
                <div class="flex items-center mt-4">
                    <span class="mr-2">
                        <svg class="text-indigo-400 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </span>
                    <p class="text-md text-gray-700 hover:text-gray-800 transition ease-in duration-150 "><a href="#">Cumque ut fugit ad qui impedit earum enim</a></p>
                </div>
                <hr class="my-3">
                <div class="flex items-center mt-4">
                    <span class="mr-2">
                        <svg class="text-indigo-400 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </span>
                    <p class="text-md text-gray-700 hover:text-gray-800 transition ease-in duration-150 "><a href="#">Cumque ut fugit ad qui impedit earum enim</a></p>
                </div>
                <hr class="my-3">
                <div class="flex items-center mt-4">
                    <span class="mr-2">
                        <svg class="text-indigo-400 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </span>
                    <p class="text-md text-gray-700 hover:text-gray-800 transition ease-in duration-150 "><a href="#">Cumque ut fugit ad qui impedit earum enim</a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
