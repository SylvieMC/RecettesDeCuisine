<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Recettes de cuisine</title>
    </head>
    <body>
        <div id="app">
            <heading></heading>
            <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}"></recettes>
            <bottom></bottom>
        </div>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
