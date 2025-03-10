<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class PostChunk extends Component {

	#[Reactive() ]
	public array $ids;
	public function render() {
		return view( 'livewire.post-chunk', [ 
			'posts' => Post::latest()->whereIn( 'id', $this->ids )->get(),
		] );
	}
}
