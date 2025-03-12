<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class PostChunk extends Component {

	// #[Reactive() ]
	public array $ids;
	public int $chunkIndex;
	public function render() {
		return view( 'livewire.post-chunk', [ 
			'posts' => Post::latest()->whereIn( 'id', $this->ids )->get(),
		] );
	}
	#[On('chunk.{chunkIndex}.prepend') ]
	public function prependPost( int $postId ) {
		// dd( 'hello world' );
		$this->ids = [ $postId, ...$this->ids ];
	}
}
