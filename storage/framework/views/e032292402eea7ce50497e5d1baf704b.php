<section class="flex w-full justify-center">
	<!-- Modified in livewire/livewire/features/supportfileuploads/withfileuploads.php -->	

	  <ul wire:sortable="updateOrder" class="grid grid-cols-1 gap-4">	  	
	    
	    
			<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<li wire:sortable.item="<?php echo e($order_detail['value']); ?>" wire:key="<?php echo e($order_detail['value']); ?>" class="flex justify-center focus:text-violet-300">

					<div class="max-h-12 max-w-full lg:max-w-[600px] flex flex-auto gap-2 p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 active:text-violet-">
						<div wire:sortable.handle class="flex w-7 h-auto items-center justify-center px-2 py-0.5 text-xs font-medium text-gray-500 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-400 select-none cursor-pointer  sm:px-2">
							<?php echo e($key + 1); ?>

						</div>
						<div class="w-[10%] sm:px-2">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20" height="20" viewBox="0 0 550.801 550.801" style="enable-background:new 0 0 550.801 550.801;" xml:space="preserve" fill="currentColor">
								<g>
									<path d="M160.381,282.225c0-14.832-10.299-23.684-28.474-23.684c-7.414,0-12.437,0.715-15.071,1.432V307.6	c3.114,0.707,6.942,0.949,12.192,0.949C148.419,308.549,160.381,298.74,160.381,282.225z"/>
									<path d="M272.875,259.019c-8.145,0-13.397,0.717-16.519,1.435v105.523c3.116,0.729,8.142,0.729,12.69,0.729 c33.017,0.231,54.554-17.946,54.554-56.474C323.842,276.719,304.215,259.019,272.875,259.019z"/>
									<path d="M488.426,197.019H475.2v-63.816c0-0.398-0.063-0.799-0.116-1.202c-0.021-2.534-0.827-5.023-2.562-6.995L366.325,3.694 c-0.032-0.031-0.063-0.042-0.085-0.076c-0.633-0.707-1.371-1.295-2.151-1.804c-0.231-0.155-0.464-0.285-0.706-0.419 c-0.676-0.369-1.393-0.675-2.131-0.896c-0.2-0.056-0.38-0.138-0.58-0.19C359.87,0.119,359.037,0,358.193,0H97.2 c-11.918,0-21.6,9.693-21.6,21.601v175.413H62.377c-17.049,0-30.873,13.818-30.873,30.873v160.545	c0,17.043,13.824,30.87,30.873,30.87h13.224V529.2c0,11.907,9.682,21.601,21.6,21.601h356.4c11.907,0,21.6-9.693,21.6-21.601 V419.302h13.226c17.044,0,30.871-13.827,30.871-30.87v-160.54C519.297,210.838,505.47,197.019,488.426,197.019z M97.2,21.605	h250.193v110.513c0,5.967,4.841,10.8,10.8,10.8h95.407v54.108H97.2V21.605z M362.359,309.023c0,30.876-11.243,52.165-26.82,65.333	c-16.971,14.117-42.82,20.814-74.396,20.814c-18.9,0-32.297-1.197-41.401-2.389V234.365c13.399-2.149,30.878-3.346,49.304-3.346	c30.612,0,50.478,5.508,66.039,17.226C351.828,260.69,362.359,280.547,362.359,309.023z M80.7,393.499V234.365	c11.241-1.904,27.042-3.346,49.296-3.346c22.491,0,38.527,4.308,49.291,12.928c10.292,8.131,17.215,21.534,17.215,37.328	c0,15.799-5.25,29.198-14.829,38.285c-12.442,11.728-30.865,16.996-52.407,16.996c-4.778,0-9.1-0.243-12.435-0.723v57.67H80.7	V393.499z M453.601,523.353H97.2V419.302h356.4V523.353z M484.898,262.127h-61.989v36.851h57.913v29.674h-57.913v64.848h-36.593	V232.216h98.582V262.127z"/>
								</g>
							</svg>
						</div>
						<span class="inline-block w-[80%] text-ellipsis overflow-hidden select-none">
							<?php echo e($pdfs[$order_detail['value']]->getClientOriginalName()); ?>

						</span>

						<button wire:click="delPdf(<?php echo e($order_detail['value']); ?>,<?php echo e($key); ?>)" class="flex w-7 sm:px-2 h-auto items-center justify-center px-2 py-0.5 text-xs font-medium text-gray-500 bg-gray-200 rounded-full border-solid border-2 hover:border-red-300 hover:text-red-300">X	</button>
						
					</div>  				

				</li>
				
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
	  </ul>	
</section><?php /**PATH C:\Users\Admin\Desktop\MARCH-23\laravel\merge2pdf\resources\views/livewire/pdf-list.blade.php ENDPATH**/ ?>