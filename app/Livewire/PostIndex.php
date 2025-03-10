<?php

namespace App\Livewire;

use App\Events\MainEvent;
use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostIndex extends Component {
	// #[On('echo:posts,.myevent') ]
	// public function testPusher() {
	// 	dd( 'Message recieved' );
	// }
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
	#[On('echo:posts,PostCreated') ]
	public function prependPostFromBroadcast( array $data ) {
		$this->prependPost( $data['postId'] );
	}
	#[On('post.created') ]
	public function prependPost( int $postId ) {
		if ( empty( $this->chunks ) ) {
			$this->chunks[] = [];
		}
		$this->chunks[0] = [ $postId, ...$this->chunks[0] ];
	}

	// public function testBroadcast() {
	// 	event( new MainEvent() );
	// }

}
