<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class EditPost extends Component {
	public Post $post;
	public function render() {
		return view( 'livewire.edit-post' );
	}
}
