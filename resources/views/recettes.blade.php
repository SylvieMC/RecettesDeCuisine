@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}"></recettes>
            <bottom></bottom>
        </div>
@endsection
