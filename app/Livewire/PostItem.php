<?php

namespace App\Livewire;

use App\Events\PostDeleted;
use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PostItem extends Component {
	public Post $post;
	#[Validate('required', message: "You can't leave the body empty") ]
	public string $body;
	public function mount() {
		$this->body = $this->post->body;
	}
	public function render() {
		return view( 'livewire.post-item' );
	}
	public function edit() {
		$this->authorize( 'update', $this->post );
		$this->validate();
		$this->post->update( [ 
			'body' => $this->body,
		] );
	}
	public function delete() {
		$this->authorize( 'delete', $this->post );
		$postId = $this->post->id;
		$this->post->delete();
		$this->dispatch( 'post.deleted', postId: $postId );
		broadcast( new PostDeleted( $postId ) )->toOthers();
	}
}
