@extends('base')

@section('main')
        <div id="app">
            <heading></heading>
            <categorie :categories="{{ $categories }}"></categorie>
            <bottom></bottom>
        </div>
@endsection
