<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta name="csrf-token" content="{{ csrf_token() }}">
	  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	  	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
	  	<title>Recette de cuisine</title>
	</head>
	<body>
	    @yield('main')
	<script src="{{ mix('js/app.js') }}" defer></script>
	</body>
</html>
