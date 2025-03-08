<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component {
	#[Validate('required', message: 'You need a post body') ]
	public string $body;

	public function render() {
		return view( 'livewire.create-post' );
	}

	public function create() {
		$this->validate();
		/** @var Post $post */
		$post = auth()->user()->posts()->create( [ 'body' => $this->body ] );
		$this->dispatch( 'post.created', postId: $post->id );
	}
}
