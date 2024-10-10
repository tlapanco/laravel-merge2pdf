<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Merge2pdf | {{ $title ?? 'Inicio'}}</title>
	  @vite('resources/css/app.css')
	</head>
	<body>
		{{ $slot }}	
	</body>
	@livewireScripts
	<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
</html>
