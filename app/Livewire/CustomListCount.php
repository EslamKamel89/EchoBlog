<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class CustomListCount extends Component {
	#[Reactive() ]
	/** @var array<string> */
	public array $names;
	public function render() {
		return view( 'livewire.custom-list-count' );
	}
}
