<div style="<?php if($res): ?>''<?php else: ?> display: none <?php endif; ?>" id="downPanel" class="fixed inset-0 p-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6 relative">
        <svg wire:click="close" xmlns="http://www.w3.org/2000/svg" class="w-3.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
            <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
            <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
        </svg>
        <div class="my-8 text-center">
            <!--[if BLOCK]><![endif]--><?php if($title == 'Error'): ?>
            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <?php else: ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 shrink-0 fill-green-500 inline" viewBox="0 0 512 512">
                <path d="M383.841 171.838c-7.881-8.31-21.02-8.676-29.343-.775L221.987 296.732l-63.204-64.893c-8.005-8.213-21.13-8.393-29.35-.387-8.213 7.998-8.386 21.137-.388 29.35l77.492 79.561a20.687 20.687 0 0 0 14.869 6.275 20.744 20.744 0 0 0 14.288-5.694l147.373-139.762c8.316-7.888 8.668-21.027.774-29.344z"data-original="#000000" />
                <path d="M256 0C114.84 0 0 114.84 0 256s114.84 256 256 256 256-114.84 256-256S397.16 0 256 0zm0 470.487c-118.265 0-214.487-96.214-214.487-214.487 0-118.265 96.221-214.487 214.487-214.487 118.272 0 214.487 96.221 214.487 214.487 0 118.272-96.215 214.487-214.487 214.487z" data-original="#000000" />
            </svg>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <h4 class="text-xl text-gray-800 font-semibold mt-4"><?php echo e($title); ?></h4>
            <p class="text-sm text-gray-500 leading-relaxed mt-4"><?php echo e($message); ?></p>
        </div>
        <div class="flex justify-center">
            <button wire:click="download" class="px-5 py-2.5 w-[50%]  rounded-full bg-violet-400 text-violet-100 transition duration-300 hover:scale-110 hover:font-bold">Descargar</button>
        </div>               
    </div>
</div><?php /**PATH C:\Users\Admin\Desktop\MARCH-23\laravel\merge2pdf\resources\views/livewire/download.blade.php ENDPATH**/ ?>