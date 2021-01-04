<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Questions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @foreach($questions as $question)
                <!-- Current Profile Photo -->
               
                <div class="border-b border-gray-200 p-4 mb-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex items-center">
                        <div class="w-32 sm:w-28 md:w-24 md:mr-3" x-show="! photoPreview">
                            <img src="{{ $question->user->profile_photo_url }}" alt="{{ $question->user->name }}" class="rounded-full w-20 h-20 object-cover">
                        </div>
                        <div class="w-full border-b border-gray-300 mb-2">
                            <h1 class="py-2 font-semibold text-2xl text-gray-700"><a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a></h1>
                            <div class="font-normal text-gray-500 mb-1">Asked by<span class=" ml-1 font-semibold text-lg text-gray-600 cursor-pointer"><a href="#">{{ $question->user->name }}</a></span><small class="ml-1">{{ $question->date }}</small></div>
                            
                        </div>
                    </div>  
                    <div class="flex">
                        <div class="mx-4 w-32 sm:w-28 md:w-24">

                            <!-- Chevron up & down icon -->
                            <svg class="m-auto w-12 h-12 text-gray-400 cursor-pointer hover:text-gray-500 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" fill="currentcolor"/>
                            </svg>
                            <p class="text-center text-2xl">63</p>
                            <svg class="m-auto w-12 h-12 text-gray-400 cursor-pointer hover:text-gray-500 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" fill="currentcolor" />
                            </svg>
                           
                            <!-- Star icon -->
                            <svg class="m-auto w-12 h-8 text-yellow-300 cursor-pointer hover:text-yellow-400 transition duration-150 ease-in-out " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" >
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" fill="currentColor" />
                            </svg>
                            
                            <p class="text-center text-yellow-300 text-xl">12</p>

                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-normal text-gray-600 pl-1 sm:pl-0">{{ $question->bodyLimit }}</p>
                        </div>
                    </div>
                </div>

            @endforeach

            {{ $questions->links() }}
            
        </div>
    </div>
</x-app-layout>
