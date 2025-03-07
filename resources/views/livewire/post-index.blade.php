<div class="">
    <div class="space-y-5">
        @for( $chunk = 0; $chunk < $page; $chunk++ )
			<livewire:post-chunk :ids="$chunks[ $chunk ]" :key="$chunk" />
		@endfor
    </div>
    @if ( $this->hasMorePages() )

		<div x-data x-intersect="$wire.incrementPage"></div>
	@endif
    {{-- <button class="btn btn-success btn-sm text-xs text-white" wire:click="incrementPage">incremen</button> --}}
</div>