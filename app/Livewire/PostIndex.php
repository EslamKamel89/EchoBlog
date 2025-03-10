<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostIndex extends Component {

	public array $chunks = [];
	public int $page = 1;
	public function mount() {
		$this->chunks = Post::latest()->pluck( 'id' )->chunk( 10 )->toArray();
	}

	public function render() {
		return view( 'livewire.post-index', );
	}
	public function incrementPage() {
		$this->page++;
	}
	public function hasMorePages(): bool {
		return $this->page < count( $this->chunks );
	}
	#[On('post.created') ]
	public function prependPost( int $postId ) {
		if ( empty( $this->chunks ) ) {
			$this->chunks[] = [];
		}
		$this->chunks[0] = [ $postId, ...$this->chunks[0] ];
	}

}
