<?php

namespace App\Livewire;

 



use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

 


class UploadPdf extends Component
{
	use WithFileUploads;

	#[Validate('required')]
	public $pdfs = [];

	public $order = [];

	public function rules() {
		return [
			'pdfs' => 'required',
			'pdfs.*' => 'required|file|mimes:pdf'
		];
	}

	public function messages(){
		return [
			'pdfs.required' => 'Agrega archivos para unir',
			'pdfs.*.mimes' => 'Solo se admiten archivos PDF'
		];
	}


	#[On('file-removed')]
	public function delete_pdf($fileDetail){		
		unset($this->order[$fileDetail['orderkey']]);

		$this->order = array_values($this->order);

		$this->dispatch('new-order', newOrder: $this->order);
		unset($this->pdfs[$fileDetail['pdfIndex']]);		
	}

	#[On('list-reordered')]
	public function reorder_pdfs($updatedOrder){
		$this->order = $updatedOrder;
	}

	#[On('livewire-upload-finish')]
	public function set_order () {
		$this->order = [];
		foreach($this->pdfs as $key => $pdf)	{
			array_push($this->order, ['value' => $key ]);
		}

		$this->dispatch('new-order', newOrder: $this->order);
	}


	public function merge_pdfs()
	{

		$this->validate();


		$this->dispatch('merging-pdfs');
		
		$mergedPdf = new \Jurosh\PDFMerge\PDFMerger;


		foreach ($this->order as $key => $o) {
			$mergedPdf
			->addPDF(storage_path('app/public/') . $this->pdfs[$o['value']]
			->getClientOriginalPath(), 'all');
		}

		$pdf_path = storage_path('app/public/mergedpdfs/');
		$filename =  'PDF-Unido '.date('m-d-Y h-i-s a', time()).'.pdf';
		

		$mergedPdf->merge('file', $pdf_path . $filename);			
		$title = 'Exito'			;
		$message = 'Se ha creado el PDF con el nombre ' . $filename;		

		return $this->dispatch('merged-pdfs', mergedPdf: ['title' => $title, 'message' => $message, 'filename' => $filename]);
	}
	
			
		

	public function render()
	{
		return view('livewire.upload-pdf');
	}
}
