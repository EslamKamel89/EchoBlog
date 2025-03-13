<div x-data="{editing: false}" class="flex items-start gap-3 my-3 border-b pb-1 border-b-slate-500">
    <div class="shrink-0 w-12">
        <img class="w-12 h-12 rounded-full overflow-clip" src="{{ $post->user->avatarUrl() }}">
    </div>
    <div class="grow space-y-2">
        <div class="font-bold text-lg flex gap-x-2 items-center">
            <div>
                {{ $post->user->name }}
            </div>
            <div class="mx-8 border rounded-full py-1 px-2 bg-blue-500 text-white">{{ $post->id }}</div>
            <button wire:click="like" class="btn btn-sm btn-error bg-red-100 text-lg" wire:loading.attr="disabled"
                wire:target="like">💖 <span class="text-sm ">{{ $post->likes == 0 ? '' : $post->likes }}</span></button>
        </div>
        <div x-show="!editing">
            <p class="pt-2 pb-4 px-3" wire:loading.class="opacity-25" wire:target="edit">{{ $post->body }}</p>
        </div>
        <div x-show="editing">
            <livewire:edit-post :post="$post" wire:model="body" />
        </div>
        @error( 'body' )
			<div class="text-xs text-red-500 ms-3 -translate-y-5">{{ $message }}</div>
		@enderror
    </div>
    <div class="flex flex-col items-center gap-y-2">
        @can( 'update', $post )
			<button class="btn btn-sm text-sm   text-white self-stretch" x-bind:class="editing? 'btn-success':'btn-warning'"
				@click="if(editing) $wire.edit(); editing = !editing; " x-text="editing?'Save':'Edit'"></button>
		@endcan
        @can( 'delete', $post )
			<button class="btn btn-sm text-sm btn-error text-white self-stretch" wire:click="delete"
				wire:confirm="Are you sure you want to delete this post?">Delete</button>
		@endcan
    </div>
</div>