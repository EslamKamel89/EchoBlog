<?php

namespace App\Livewire;

use Livewire\Component;

class CustomList extends Component {

	/** @var array<string> $names */
	public array $names = [];

	public function render() {
		return view( 'livewire.custom-list' );
	}
	public function addName() {
		$this->names[] = fake()->name();
	}
}
