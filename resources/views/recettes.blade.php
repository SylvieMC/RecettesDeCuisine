@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
            <bottom></bottom>
        </div>
@endsection
