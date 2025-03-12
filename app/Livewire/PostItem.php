<?php

namespace App\Livewire;

use App\Events\PostDeleted;
use App\Models\Post;
use Livewire\Component;

class PostItem extends Component {
	public Post $post;
	public string $body;
	public function render() {
		return view( 'livewire.post-item' );
	}
	public function edit() {
		$this->authorize( 'update', $this->post );
	}
	public function delete() {
		$this->authorize( 'delete', $this->post );
		$postId = $this->post->id;
		$this->post->delete();
		$this->dispatch( 'post.deleted', postId: $postId );
		broadcast( new PostDeleted( $postId ) )->toOthers();
	}
}
