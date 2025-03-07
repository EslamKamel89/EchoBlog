<div class="space-y-5">
    @foreach ( $posts as $post )
		<livewire:post-item :post="$post" :key="$post->id" />
	@endforeach
</div>