@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <categorie :categorie="{{ $categorie }}" :recettes="{{ $recettes }}"></categorie>
            <bottom></bottom>
        </div>
@endsection
