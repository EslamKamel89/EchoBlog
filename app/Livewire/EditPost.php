<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class EditPost extends Component {
	public Post $post;
	#[Modelable ]
	public string $body;
	public function render() {
		return view( 'livewire.edit-post' );
	}
}
