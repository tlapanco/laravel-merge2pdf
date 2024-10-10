<?php

namespace App\Livewire;

use Livewire\Component;

class PdfElement extends Component
{
	public $name;
	public $index;
	public $delElement;
    public function render()
    {
        return view('livewire.pdf-element');
    }
}
