@extends('base')

@section('main')
            <heading></heading>
            <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
            <bottom></bottom>
@endsection
