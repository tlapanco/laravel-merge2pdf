<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Merge2pdf | <?php echo e($title ?? 'Inicio'); ?></title>
	  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
	</head>
	<body>
		<?php echo e($slot); ?>	
	</body>
	<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

	<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
</html>
<?php /**PATH C:\Users\Admin\Desktop\MARCH-23\laravel\merge2pdf\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>