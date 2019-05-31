@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <h2>Les recettes du mois :</h2>
            <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
            <bottom></bottom>
        </div>
@endsection
