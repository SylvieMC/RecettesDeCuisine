@extends('base')

@section('main')
            <heading></heading>
            <recette :recette="{{ $recette }}" :utilisateur="{{ $utilisateur }}" :categorie="{{ $categorie }}" :ingredients="{{ $ingredients }}" :etapes="{{ $etapes }}"></recette>
            <bottom></bottom>
@endsection