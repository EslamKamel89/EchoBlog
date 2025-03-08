<div>
    <x-text-area class="w-full h-28 p-4" />
    <x-input-error :messages="$errors->get( 'body' )" wire:model="body" placeholder="What do you want to say" />
</div>