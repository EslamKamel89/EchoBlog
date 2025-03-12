<div x-data="{editing: false}" class="flex items-start gap-3 my-3 border-b pb-1 border-b-slate-500">
    <div class="shrink-0 w-12">
        <img class="w-12 h-12 rounded-full overflow-clip" src="{{ $post->user->avatarUrl() }}">
    </div>
    <div class="grow space-y-2">
        <div class="font-bold text-lg">{{ $post->user->name }} <span
                class="mx-8 border rounded-full py-1 px-2 bg-blue-500 text-white">{{ $post->id }}</span></div>
        <div x-show="!editing">
            <p class="pt-2 pb-4 px-3">{{ $post->body }}</p>
        </div>
        <div x-show="editing">
            <livewire:edit-post :post="$post" />
        </div>
    </div>
    <div class="flex flex-col items-center gap-y-2">
        @can( 'update', $post )
			<button class="btn btn-sm text-sm   text-white self-stretch" x-bind:class="editing? 'btn-success':'btn-warning'"
				@click="editing = !editing" x-text="editing?'Save':'Edit'"></button>
		@endcan
        @can( 'delete', $post )
			<button class="btn btn-sm text-sm btn-error text-white self-stretch" wire:click="delete"
				wire:confirm="Are you sure you want to delete this post?">Delete</button>
		@endcan
    </div>
</div>