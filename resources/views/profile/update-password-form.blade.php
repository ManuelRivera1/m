<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
    </x-slot>

    <x-slot name="description">
    </x-slot>

    <x-slot name="form">
        <p  class="text-lg font-medium text-gray-900" style=" font-weight: bold !important;">{{ __('Update Password:') }}</p>
        <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

        <div class="mb-3 ">
            <input placeholder="Current Password" type="password" class="mb-4 form-control" id="current_password"  wire:model.defer="state.current_password" autocomplete="current-password">
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>
        <div class="mb-3 ">
            <input placeholder="New Password" type="password" class="mb-1 form-control" id="password"  wire:model.defer="state.password" autocomplete="new-password">
            <x-jet-input-error for="password" class="mt-2" />
        </div>
        <div class="mb-3 ">
            <input placeholder="Confirm Password" type="password" class="mb-1 form-control" id="password_confirmation"  wire:model.defer="state.password_confirmation" autocomplete="new-password">
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>
        <div class="text-center">
            <button class="btn btn-success" wire:loading.attr="disabled" wire:target="photo">
                Save
            </button>
        </div>
    </x-slot>


</x-jet-form-section>
