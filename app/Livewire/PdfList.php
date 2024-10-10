<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\On;

class PdfList extends Component
{
	public $order = [];

	#[Reactive]
	public $pdfs;	

	#[On('new-order')]
	public function get_order($newOrder){		
		$this->order = $newOrder;
	}

	public function updateOrder($updatedOrder){
		$this->order = $updatedOrder;										
		$this->dispatch('list-reordered', updatedOrder: $updatedOrder);
	}

	public function delPdf($pdfindex, $orderkey){
		$this->dispatch('file-removed', 
			fileDetail: ['pdfIndex' => $pdfindex, 'orderkey' => $orderkey]);	
		unset($this->order[$orderkey]);
	}

	public function mount ($pdfs) {
		$this->pdfs = $pdfs;		
	}

	public function render()
	{
		return view('livewire.pdf-list', ["files", $this->pdfs]);
	}
}
