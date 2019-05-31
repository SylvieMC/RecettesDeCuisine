<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta name="csrf-token" content="{{ csrf_token() }}">
	  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	  	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
	  	<title>Recette de cuisine</title>
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	</head>
	<body>
	    @yield('main')
	<script src="{{ mix('js/app.js') }}" defer></script>
	</body>
</html>
