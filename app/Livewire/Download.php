<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Download extends Component
{
	public $res = null;
	public $title;
	public $message;
	public $filename;


	#[On('merged-pdfs')]
	public function show_download($mergedPdf) {
		$this->res = $mergedPdf;
		$this->title = $mergedPdf['title'];
		$this->message = $mergedPdf['message'];
		$this->filename = $mergedPdf['filename'];

	}

	public function close () {
		$this->res = '';
	}

	public function download() {
		
		return response()->download(storage_path('app/public/mergedpdfs/') . $this->filename);
				
	}

	public function render()
	{
		return view('livewire.download');
	}
}
