@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <recette :recette="{{ $recette }}" :utilisateur="{{ $utilisateur }}" :categorie="{{ $categorie }}" :ingredients="{{ $ingredients }}" :etapes="{{ $etapes }}"></recette>
            <bottom></bottom>
        </div>
@endsection