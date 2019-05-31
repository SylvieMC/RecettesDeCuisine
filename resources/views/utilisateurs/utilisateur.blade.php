@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <utilisateur :utilisateur="{{ $utilisateur }}" :avatar="{{ $avatar }}" :recettes="{{ $recettes }}" ></utilisateur>
            <bottom></bottom>
        </div>
@endsection