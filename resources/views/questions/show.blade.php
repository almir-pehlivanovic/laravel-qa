<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ask Question') }}
            </h2>
            <x-jet-dropdown-link href="{{ route('questions.index') }}">
                <div class="flex items-center">            
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    {{ __('Back to all Questions') }}
                </div>
            </x-jet-dropdown-link>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class ="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900"> {{ __('Ask Question') }}</h3>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Make sure you describe your question as accurately as possible.') }}
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="title">{{ __('Title') }}</label>
                                        <input id="title" type="text" class="mt-1 block w-full form-input rounded-md shadow-sm {{ $errors->has('title') ? 'border-red-600' : '' }}" />

                                            @if($errors->has('title'))
                                                <p class="text-sm text-red-600" for="title" class="mt-2">{{ $errors->first('title') }}</p>
                                            @endif
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="body">{{ __('Description') }}</label>
                                        <textarea class="mt-1 block w-full form-input rounded-md shadow-sm {{ $errors->has('body') ? 'border-red-600' : '' }} " name="body" id="body" cols="30" rows="10"></textarea>
                                            
                                            @if($errors->has('body'))
                                                <p class="text-sm text-red-600" for="body" class="mt-2">{{ $errors->first('body') }}</p>
                                            @endif
                                    </div>
                                </div>
                            </div>
                           
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type ='submit' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'>
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
