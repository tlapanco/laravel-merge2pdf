<?php

namespace App\Livewire;

use Livewire\Component;

class ProgressStatus extends Component
{
	public $idContenedor;
	public $idProgress;
	
    public function render()
    {
        return view('livewire.progress-status');
    }
}
