<x-jet-form-section submit="addQuestion">
    <x-slot name="title">
        {{ __('Ask Question') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Make sure your question is explained in detail.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="title" value="{{ __('Title') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title" autocomplete="title" />
            <x-jet-input-error for="title" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="body" value="{{ __('Description') }}" />
            <textarea id="body" type="body" class="form-input rounded-md shadow-sm mt-1 block w-full" wire:model.defer="body"  cols="30" rows="10"></textarea>
            <x-jet-input-error for="body" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Your question has been added.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>