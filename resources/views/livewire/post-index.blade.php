<div class="">
    <button class="btn btn-error" wire:click="testBroadcast">Test pusher</button>
    @if( count( $chunks ) )
		<div class="space-y-5">
			@for( $chunk = 0; $chunk < $page; $chunk++ )
				<livewire:post-chunk :ids="$chunks[ $chunk ]" :key="$chunk" :chunkIndex="$chunk" />
			@endfor
		</div>
		@if ( $this->hasMorePages() )
			<div x-data x-intersect="$wire.incrementPage"></div>
		@endif
	@else
		<div class="my-4 mx-auto">There are no posts yet</div>
	@endif
</div>