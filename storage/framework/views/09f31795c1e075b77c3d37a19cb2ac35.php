<section class="flex  h-[calc(full-80px)] w-full px-[20%] py-[10%] flex-col items-center justify-center gap-10">

	<h1 class="text-3xl ">Unir archivos PDF</h1>

	<!--[if BLOCK]><![endif]--><?php if($errors->any()): ?>
  <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Error!</span>
      <?php echo e($errors->all()[0]); ?>

    </div>
  </div>
  <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('progress-status', ['idContenedor' => 'progressDiv','idProgress' => 'upProgress']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2455388143-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?> 
  
	<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pdf-list', ['pdfs' => $pdfs,'class' => 'flex']);

$__html = app('livewire')->mount($__name, $__params, 'listpdf', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


	<form wire:submit.prevent="merge_pdfs" class="flex justify-center items-center w-full flex-col gap-3">
  	<div class="mb-5 w-full">          
        <label for="pdfs" class="flex flex-col items-center justify-center py-9 w-full border border-gray-300 border-dashed rounded-2xl cursor-pointer bg-violet-100 ">
          <div class="mb-3 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none" class="text-violet-500">
              <g id="Upload 02">
                <path id="icon" d="M16.296 25.3935L19.9997 21.6667L23.7034 25.3935M19.9997 35V21.759M10.7404 27.3611H9.855C6.253 27.3611 3.33301 24.4411 3.33301 20.8391C3.33301 17.2371 6.253 14.3171 9.855 14.3171V14.3171C10.344 14.3171 10.736 13.9195 10.7816 13.4326C11.2243 8.70174 15.1824 5 19.9997 5C25.1134 5 29.2589 9.1714 29.2589 14.3171H30.1444C33.7463 14.3171 36.6663 17.2371 36.6663 20.8391C36.6663 24.4411 33.7463 27.3611 30.1444 27.3611H29.2589" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
              </g>
            </svg>
          </div>
          <h2 class="text-center text-violet-300   text-xs font-normal leading-4 mb-1">PDF, tamaño máximo 15MB</h2>
          <h4 class="text-center text-gray-900 px-5 text-sm font-medium leading-snug">Arrastra y suelta tus archivos aquí o haz clic.</h4>
          <input multiple wire:model="pdfs" id="pdfs" type="file" class="hidden" />
        </label>        
    </div>

    <button id="cUpload" style="display: none" wire:click="$cancelUpload('pdfs')" class="w-full md:w-[50%]  lg:max-w-[150px] rounded-full bg-violet-400 px-3 py-1 text-violet-100 transition duration-300 hover:scale-110 hover:font-bold">Cancelar</button>

    <button id="sbButton" type="submit" class="w-full md:w-[50%]  lg:max-w-[150px] rounded-full bg-violet-400 px-3 py-1 text-violet-100 transition duration-300 hover:scale-110 hover:font-bold">Unir</button>

	</form>

  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('download', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2455388143-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

  <?php echo e(count($pdfs)); ?>


  <script>    
    let up = document.getElementById('upProgress')
    let progressDiv = document.getElementById('progressDiv')
    let fileInput = document.getElementById('pdfs')
    let submitButton = document.getElementById('sbButton')
    let cancelButton = document.getElementById('cUpload')
    submitButton.setAttribute('style', 'display: none')    

    window.addEventListener('drop', event => {

    })

    window.addEventListener('livewire-upload-start', event => {
      fileInput.setAttribute('disabled', 'true')
      progressDiv.setAttribute('class', 'w-full grid grid-cols-1 gap-4')
      submitButton.setAttribute('style', 'display: none')
      cancelButton.setAttribute('style', 'display: block')
    })

    window.addEventListener('livewire-upload-finish', event => {
      progressDiv.setAttribute('class', 'hidden')     
      fileInput.setAttribute('disabled', 'false')      
      up.setAttribute('style', 'width: 0')      
      cancelButton.setAttribute('style', 'display: none')
    })

    window.addEventListener('livewire-upload-cancel', event => {
      progressDiv.setAttribute('class', 'hidden')     
      fileInput.setAttribute('disabled', 'false')      
      up.setAttribute('style', 'width: 0')      
      cancelButton.setAttribute('style', 'display: none')
    })

    window.addEventListener('livewire-upload-progress', event => {      
      up.setAttribute('style', `width: ${event.detail.progress}%`)      
    })

  </script>

</section><?php /**PATH C:\Users\Admin\Desktop\MARCH-23\laravel\merge2pdf\resources\views/livewire/upload-pdf.blade.php ENDPATH**/ ?>