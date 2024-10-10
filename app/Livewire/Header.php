<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
	public $github_profile = "https://github.com/tlapanco";

	public function render()
	{
		return view('livewire.header');
	}
}
