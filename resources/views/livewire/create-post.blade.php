<form class="mb-4" wire:submit="create">
    <x-text-area class="w-full h-28 p-4" />
    <x-input-error :messages="$errors->get( 'body' )" wire:model="body" placeholder="What do you want to say" />
    <x-primary-button class="mt-2">Post</x-primary-button>
</form>