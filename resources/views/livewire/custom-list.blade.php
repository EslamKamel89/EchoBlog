<div>
    <div class="flex flex-row gap-4 items-end">
        <button wire:click="addName" class="text-xs btn btn-success text-white">Add</button>
        <livewire:custom-list-count :names="$names" />
    </div>
    <div class="mt-4 border-top-2">
        @foreach ( $names as $name )
			<div class="px-2 py-3 border rounded-xl mt-2 text-lg font-bold" key="{{ $name }}">{{ $name }}</div>
		@endforeach
    </div>
</div>