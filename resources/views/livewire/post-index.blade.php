<div>
    @foreach ( $posts as $post )
		<livewire:post-item :post="$post" />
	@endforeach
</div>